<?php

declare(strict_types=1);

namespace Symplify\CodingStandard\Tests\Rules\NoTraitExceptItsMethodsPublicAndRequiredRule\Fixture;

trait SomeTraitWithPublicMethodRequired
{
    /**
     * @required
     */
    public function run()
    {
    }
}
