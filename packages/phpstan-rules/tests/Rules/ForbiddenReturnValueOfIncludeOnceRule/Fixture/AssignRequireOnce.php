<?php

declare(strict_types=1);

namespace Symplify\PHPStanRules\Tests\Rules\ForbiddenReturnValueOfIncludeOnceRule\Fixture;

final class AssignRequireOnce
{
    public function run(): void
    {
        $result = require_once 'Test.php';
    }
}
