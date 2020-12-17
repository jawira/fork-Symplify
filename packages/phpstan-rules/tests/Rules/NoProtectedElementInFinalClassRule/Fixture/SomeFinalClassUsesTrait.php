<?php

declare(strict_types=1);

namespace Symplify\PHPStanRules\Tests\Rules\NoProtectedElementInFinalClassRule\Fixture;

final class SomeFinalClassUsesTrait
{
    use SkipTrait;

    protected $x;

    protected function run()
    {
    }
}
