<?php

declare(strict_types=1);

namespace Symplify\PHPStanRules\Tests\Rules\NoConstructorInTestRule\Fixture\Test1;

use stdClass;

final class SomeTest
{
    public function setUp()
    {
        $this->obj = new stdClass;
    }
}
