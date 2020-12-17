<?php

declare(strict_types=1);

namespace Symplify\PHPStanRules\Tests\Rules\RequireClassTypeInClassMethodByTypeRule\Fixture;

use Symplify\PHPStanRules\Tests\Rules\RequireClassTypeInClassMethodByTypeRule\Source\AnyParentGetTypesInterface;
use Symplify\PHPStanRules\Tests\Rules\RequireClassTypeInClassMethodByTypeRule\Source\SomeType;

final class IncorrectSingleReturnRector implements AnyParentGetTypesInterface
{
    public function getNodeTypes(): array
    {
        return [SomeType::class];
    }
}
