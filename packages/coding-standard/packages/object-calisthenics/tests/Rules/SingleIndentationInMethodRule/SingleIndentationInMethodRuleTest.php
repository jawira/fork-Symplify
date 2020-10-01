<?php

declare(strict_types=1);

namespace Symplify\CodingStandard\ObjectCalisthenics\Tests\Rules\SingleIndentationInMethodRule;

use Iterator;
use PHPStan\Rules\Rule;
use Symplify\CodingStandard\ObjectCalisthenics\Rules\SingleIndentationInMethodRule;
use Symplify\PHPStanExtensions\Testing\AbstractServiceAwareRuleTestCase;

final class SingleIndentationInMethodRuleTest extends AbstractServiceAwareRuleTestCase
{
    /**
     * @dataProvider provideData()
     */
    public function testRule(string $filePath, array $expectedErrorMessagesWithLines): void
    {
        $this->analyse([$filePath], $expectedErrorMessagesWithLines);
    }

    public function provideData(): Iterator
    {
        $errorMessage = sprintf(SingleIndentationInMethodRule::ERROR_MESSAGE, 1);
        yield [__DIR__ . '/Fixture/ManyIndentations.php', [[$errorMessage, 9]]];

        yield [__DIR__ . '/Fixture/SkipSingleIndentation.php', []];
    }

    protected function getRule(): Rule
    {
        return new SingleIndentationInMethodRule();
    }
}
