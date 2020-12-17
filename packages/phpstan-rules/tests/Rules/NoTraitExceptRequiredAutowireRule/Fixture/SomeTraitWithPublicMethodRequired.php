<?php

declare(strict_types=1);

namespace Symplify\PHPStanRules\Tests\Rules\NoTraitExceptRequiredAutowireRule\Fixture;

trait SomeTraitWithPublicMethodRequired
{
    /**
     * @required
     */
    public function run()
    {
    }
}
