<?php

declare(strict_types=1);

namespace Symplify\PHPStanRules\Rules;

use Nette\Utils\Strings;
use PhpParser\Node;
use PhpParser\Node\Attribute;
use PhpParser\Node\Expr\Array_;
use PhpParser\Node\Expr\ArrayItem;
use PhpParser\Node\Expr\FuncCall;
use PhpParser\Node\Expr\MethodCall;
use PhpParser\Node\Expr\New_;
use PhpParser\Node\Expr\StaticCall;
use PhpParser\Node\Scalar\String_;
use PhpParser\Node\Stmt\ClassConst;
use PHPStan\Analyser\Scope;
use PHPStan\Type\ArrayType;
use Symplify\PHPStanRules\ParentGuard\ParentMethodReturnTypeResolver;
use Symplify\PHPStanRules\ValueObject\MethodName;
use Symplify\PHPStanRules\ValueObject\PHPStanAttributeKey;
use Symplify\RuleDocGenerator\ValueObject\CodeSample\CodeSample;
use Symplify\RuleDocGenerator\ValueObject\RuleDefinition;

/**
 * @see \Symplify\PHPStanRules\Tests\Rules\ForbiddenArrayWithStringKeysRule\ForbiddenArrayWithStringKeysRuleTest
 */
final class ForbiddenArrayWithStringKeysRule extends AbstractSymplifyRule
{
    /**
     * @var string
     */
    public const ERROR_MESSAGE = 'Array with keys is not allowed. Use value object to pass data instead';

    /**
     * @var string
     * @see https://regex101.com/r/ddj4mB/2
     */
    private const TEST_FILE_REGEX = '#(Test|TestCase)\.php$#';

    /**
     * @see https://regex101.com/r/TOKYyM/1
     * @var string
     */
    private const ARRAY_EXPECTED_CLASS_NAMES_REGEX = '#(yaml|json|neon)#i';

    /**
     * @var ParentMethodReturnTypeResolver
     */
    private $parentMethodReturnTypeResolver;

    public function __construct(ParentMethodReturnTypeResolver $parentMethodReturnTypeResolver)
    {
        $this->parentMethodReturnTypeResolver = $parentMethodReturnTypeResolver;
    }

    /**
     * @return string[]
     */
    public function getNodeTypes(): array
    {
        return [Array_::class];
    }

    /**
     * @param Array_ $node
     * @return string[]
     */
    public function process(Node $node, Scope $scope): array
    {
        if ($this->shouldSkipClass($scope)) {
            return [];
        }

        if ($this->shouldSkipArray($node, $scope)) {
            return [];
        }

        if (! $this->isArrayWithStringKey($node)) {
            return [];
        }

        // is return array required by parent
        $parentMethodReturnType = $this->parentMethodReturnTypeResolver->resolve($scope);
        if ($parentMethodReturnType instanceof ArrayType) {
            return [];
        }

        return [self::ERROR_MESSAGE];
    }

    public function getRuleDefinition(): RuleDefinition
    {
        return new RuleDefinition(self::ERROR_MESSAGE, [
            new CodeSample(
                <<<'CODE_SAMPLE'
final class SomeClass
{
    public function run()
    {
        return [
            'name' => 'John',
            'surname' => 'Dope',
        ];
    }
}
CODE_SAMPLE
                ,
                <<<'CODE_SAMPLE'
final class SomeClass
{
    public function run()
    {
        return new Person('John', 'Dope');
    }
}
CODE_SAMPLE
            ),
        ]);
    }

    private function shouldSkipArray(Array_ $array, Scope $scope): bool
    {
        // skip part of attribute
        if ((bool) $this->getFirstParentByType($array, Attribute::class)) {
            return true;
        }

        if (Strings::match($scope->getFile(), self::TEST_FILE_REGEX)) {
            return true;
        }

        // skip examples in Rector::getDefinition() method
        if (in_array($scope->getFunctionName(), ['getDefinition', MethodName::CONSTRUCTOR], true)) {
            return true;
        }

        return $this->isPartOfClassConstOrNew($array);
    }

    private function isPartOfClassConstOrNew(Node $currentNode): bool
    {
        while ($currentNode = $currentNode->getAttribute(PHPStanAttributeKey::PARENT)) {
            // constants can have default values
            if ($currentNode instanceof ClassConst) {
                return true;
            }

            // the array with string keys is required by the object parameters
            if ($currentNode instanceof New_) {
                return true;
            }

            if ($currentNode instanceof MethodCall) {
                return true;
            }

            if ($currentNode instanceof StaticCall) {
                return true;
            }

            if ($currentNode instanceof FuncCall) {
                return true;
            }
        }

        return false;
    }

    private function isArrayWithStringKey(Array_ $array): bool
    {
        foreach ($array->items as $arrayItem) {
            if ($arrayItem === null) {
                continue;
            }

            /** @var ArrayItem $arrayItem */
            if ($arrayItem->key === null) {
                continue;
            }

            if (! $arrayItem->key instanceof String_) {
                continue;
            }

            return true;
        }

        return false;
    }

    private function shouldSkipClass(Scope $scope): bool
    {
        $shortClassName = $this->getShortClassName($scope);
        if ($shortClassName === null) {
            return false;
        }

        return (bool) Strings::match($shortClassName, self::ARRAY_EXPECTED_CLASS_NAMES_REGEX);
    }
}
