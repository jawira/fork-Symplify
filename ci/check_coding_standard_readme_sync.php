<?php

use Nette\Loaders\RobotLoader;
use Nette\Utils\Strings;
use Symfony\Component\Console\Style\SymfonyStyle;
use Symplify\CodingStandard\CognitiveComplexity\Rules\ClassLikeCognitiveComplexityRule;
use Symplify\CodingStandard\CognitiveComplexity\Rules\FunctionLikeCognitiveComplexityRule;
use Symplify\CodingStandard\Fixer\AbstractSymplifyFixer;
use Symplify\CodingStandard\Fixer\ArrayNotation\ArrayOpenerNewlineFixer;
use Symplify\CodingStandard\Rules\AbstractManyNodeTypeRule;
use Symplify\CodingStandard\Rules\AbstractRegexRule;
use Symplify\PackageBuilder\Console\ShellCode;
use Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory;
use Symplify\SmartFileSystem\SmartFileSystem;

require __DIR__ . '/../vendor/autoload.php';

$codingStandardSyncChecker = new CodingStandardSyncChecker();
$codingStandardSyncChecker->run();

final class CodingStandardSyncChecker
{
    /**
     * @var string
     */
    private const CODING_STANDARD_DOCS_GLOB_PATH = __DIR__ . '/../packages/coding-standard/*/**.md';

    /**
     * @see https://regex101.com/r/Unygf7/5
     * @var string
     */
    private const CHECKER_CLASS_REGEX = '#\b(?<class_name>\w+(Fixer|Sniff|Rule))\b#m';

    /**
     * @var SymfonyStyle
     */
    private $symfonyStyle;

    /**
     * @var SmartFileSystem
     */
    private $smartFileSystem;

    public function __construct()
    {
        $this->symfonyStyle = (new SymfonyStyleFactory())->create();
        $this->smartFileSystem = new SmartFileSystem();
    }

    public function run(): void
    {
        $readmeCheckerClasses = $this->getReadmeClasses();

        $existingCheckerClasses = $this->getExistingCheckerShortClasses();
        $missingCheckerClasses = array_diff($existingCheckerClasses, $readmeCheckerClasses);

        $message = sprintf('Found %d checker classes', count($existingCheckerClasses));
        $this->symfonyStyle->note($message);

        if ($missingCheckerClasses === []) {
            $this->reportCountBySuffix($existingCheckerClasses, 'Sniff');
            $this->reportCountBySuffix($existingCheckerClasses, 'Fixer');
            $this->reportCountBySuffix($existingCheckerClasses, 'Rule');

            $this->symfonyStyle->success('README.md is up to date');
            die(ShellCode::SUCCESS);
        }

        $errorMessage = sprintf('Complete %d checkers to CodingStandard README.md file in /docs', count($missingCheckerClasses));
        $this->symfonyStyle->error($errorMessage);
        $this->symfonyStyle->listing($missingCheckerClasses);

        die(ShellCode::ERROR);
    }

    /**
     * @return string[]
     */
    private function getReadmeClasses(): array
    {
        $filePaths = glob(self::CODING_STANDARD_DOCS_GLOB_PATH);

        $checkerClasses = [];

        foreach ($filePaths as $filePath) {
            $docFileContent = $this->smartFileSystem->readFile($filePath);
            $checkerClassMatches = Strings::matchAll($docFileContent, self::CHECKER_CLASS_REGEX);

            foreach ($checkerClassMatches as $checkerClassMatch) {
                $checkerClasses[] = $checkerClassMatch['class_name'];
            }
        }

        $checkerClasses = array_unique($checkerClasses);
        sort($checkerClasses);
        return $checkerClasses;
    }

    /**
     * @return string[]
     */
    private function getExistingCheckerShortClasses(): array
    {
        $robotLoader = new RobotLoader();
        $robotLoader->setTempDirectory(sys_get_temp_dir() . '/coding_standard_readme_sync');

        $pathsWithRules = [
            __DIR__ . '/../packages/coding-standard/src/Fixer',
            __DIR__ . '/../packages/coding-standard/src/Sniffs',
            __DIR__ . '/../packages/coding-standard/src/Rules',
            __DIR__ . '/../packages/coding-standard/packages/cognitive-complexity/src/Rules',
            __DIR__ . '/../packages/coding-standard/packages/object-calisthenics/src/Rules',
        ];

        $robotLoader->addDirectory(...$pathsWithRules);

        $robotLoader->acceptFiles = ['*Sniff.php', '*Fixer.php', '*Rule.php'];
        $robotLoader->rebuild();

        $existingCheckerRules = array_keys($robotLoader->getIndexedClasses());
        sort($existingCheckerRules);

        $classesToExclude = [
            // part of imported config
            ClassLikeCognitiveComplexityRule::class,
            FunctionLikeCognitiveComplexityRule::class,
            // deprecated
            ArrayOpenerNewlineFixer::class,
        ];

        $shortClasses = [];
        foreach ($existingCheckerRules as $key => $existingCheckerRule) {
            // filter out abstract class
            if (Strings::contains($existingCheckerRule, '\Abstract')) {
                continue;
            }

            if (in_array($existingCheckerRule, $classesToExclude, true)) {
                continue;
            }

            $shortClasses[] = Strings::after($existingCheckerRule, '\\', -1);
        }

        return $shortClasses;
    }

    /**
     * @param string[] $items
     */
    private function countBySuffix(array $items, string $suffix): int
    {
        $filteredItems = array_filter($items, function (string $item) use ($suffix): bool {
            return Strings::endsWith($item, $suffix);
        });

        return count($filteredItems);
    }

    /**
     * @param string[] $items
     */
    private function reportCountBySuffix(array $items, string $suffix): void
    {
        $itemCount = $this->countBySuffix($items, $suffix);
        $this->symfonyStyle->note($itemCount . ' ' . $suffix . 's');
    }
}
