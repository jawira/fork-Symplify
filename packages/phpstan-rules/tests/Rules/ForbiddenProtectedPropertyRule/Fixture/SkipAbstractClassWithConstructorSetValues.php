<?php

declare(strict_types=1);

namespace Symplify\PHPStanRules\Tests\Rules\ForbiddenProtectedPropertyRule\Fixture;

abstract class SkipAbstractClassWithConstructorSetValues
{
    protected $whatever;

    public function __construct()
    {
        $this->whatever = 10000;
    }
}
