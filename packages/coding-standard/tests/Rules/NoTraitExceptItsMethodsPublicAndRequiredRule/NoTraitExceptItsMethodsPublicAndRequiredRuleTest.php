<?php

declare(strict_types=1);

namespace Symplify\CodingStandard\Tests\Rules\NoTraitExceptItsMethodsPublicAndRequiredRule;

use Iterator;
use PHPStan\Rules\Rule;
use Symplify\CodingStandard\Rules\NoTraitExceptItsMethodsPublicAndRequiredRule;
use Symplify\PHPStanExtensions\Testing\AbstractServiceAwareRuleTestCase;

final class NoTraitExceptItsMethodsPublicAndRequiredRuleTest extends AbstractServiceAwareRuleTestCase
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
        yield [__DIR__ . '/Fixture/SomeTraitWithPublicMethodRequired.php', []];
        yield [__DIR__ . '/Fixture/SomeTrait.php', [[NoTraitExceptItsMethodsPublicAndRequiredRule::ERROR_MESSAGE, 7]]];
        yield [
            __DIR__ . '/Fixture/SomeTraitWithoutMethod.php',
            [[NoTraitExceptItsMethodsPublicAndRequiredRule::ERROR_MESSAGE, 7]],
        ];
        yield [
            __DIR__ . '/Fixture/SomeTraitWithPublicMethod.php',
            [[NoTraitExceptItsMethodsPublicAndRequiredRule::ERROR_MESSAGE, 7]],
        ];
        yield [
            __DIR__ . '/Fixture/SomeTraitWithPrivateMethodRequired.php',
            [[NoTraitExceptItsMethodsPublicAndRequiredRule::ERROR_MESSAGE, 7]],
        ];
    }

    protected function getRule(): Rule
    {
        return $this->getRuleFromConfig(
            NoTraitExceptItsMethodsPublicAndRequiredRule::class,
            __DIR__ . '/../../../config/symplify-rules.neon'
        );
    }
}
