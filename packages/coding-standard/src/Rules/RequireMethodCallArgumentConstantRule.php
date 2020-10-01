<?php

declare(strict_types=1);

namespace Symplify\CodingStandard\Rules;

use PhpParser\Node;
use PhpParser\Node\Arg;
use PhpParser\Node\Expr\ClassConstFetch;
use PhpParser\Node\Expr\MethodCall;
use PhpParser\Node\Expr\Variable;
use PhpParser\Node\Identifier;
use PHPStan\Analyser\Scope;
use PHPStan\Rules\Rule;
use PHPStan\Type\ObjectType;

/**
 * @see \Symplify\CodingStandard\Tests\Rules\RequireMethodCallArgumentConstantRule\RequireMethodCallArgumentConstantRuleTest
 */
final class RequireMethodCallArgumentConstantRule implements Rule
{
    /**
     * @var string
     */
    public const ERROR_MESSAGE = 'Method call argument on position %d must use constant over value';

    /**
     * @var mixed[]
     */
    private $constantArgByMethodByType = [];

    /**
     * @param mixed[] $constantArgByMethodByType
     */
    public function __construct(array $constantArgByMethodByType = [])
    {
        $this->constantArgByMethodByType = $constantArgByMethodByType;
    }

    public function getNodeType(): string
    {
        return MethodCall::class;
    }

    /**
     * @param MethodCall $node
     * @return string[]
     */
    public function processNode(Node $node, Scope $scope): array
    {
        if (! $node->name instanceof Identifier) {
            return [];
        }

        $errorMessages = [];

        $methodName = (string) $node->name;

        foreach ($this->constantArgByMethodByType as $type => $positionsByMethods) {
            $positions = $this->matchPositions($node, $scope, $type, $positionsByMethods, $methodName);
            if ($positions === null) {
                continue;
            }

            foreach ($node->args as $key => $arg) {
                if ($this->shouldSkipArg($key, $positions, $arg)) {
                    continue;
                }

                $errorMessages[] = sprintf(self::ERROR_MESSAGE, $key);
            }
        }

        return $errorMessages;
    }

    private function isNodeVarType(MethodCall $methodCall, Scope $scope, string $desiredType): bool
    {
        $methodVarType = $scope->getType($methodCall->var);
        $desiredObjectType = new ObjectType($desiredType);
        return $methodVarType->equals($desiredObjectType);
    }

    /**
     * @return mixed|null
     */
    private function matchPositions(
        $node,
        Scope $scope,
        string $desiredType,
        array $positionsByMethods,
        string $methodName
    ) {
        if (! $this->isNodeVarType($node, $scope, $desiredType)) {
            return null;
        }

        return $positionsByMethods[$methodName] ?? null;
    }

    /**
     * @param int[] $positions
     */
    private function shouldSkipArg(int $key, array $positions, Arg $arg): bool
    {
        if (! in_array($key, $positions, true)) {
            return true;
        }

        if ($arg->value instanceof Variable) {
            return true;
        }

        return $arg->value instanceof ClassConstFetch;
    }
}
