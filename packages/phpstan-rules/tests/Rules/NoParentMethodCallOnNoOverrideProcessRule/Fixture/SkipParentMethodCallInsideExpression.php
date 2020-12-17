<?php

declare(strict_types=1);

namespace Symplify\PHPStanRules\Tests\Rules\NoParentMethodCallOnNoOverrideProcessRule\Fixture;

use Symplify\PHPStanRules\Tests\Rules\NoParentMethodCallOnNoOverrideProcessRule\Source\ParentClass;

final class SkipParentMethodCallInsideExpression extends ParentClass
{
    protected function setUp(): void
    {
        if (true) {
            parent::setUp();
        }
    }
}
