<?php

declare(strict_types=1);

namespace Symplify\PHPStanRules\Tests\Rules\NoStaticPropertyRule\Fixture\Service;

final class SomeServiceWithSetterStaticProperty
{
    private static $x;

    public function setX(stdClass $x)
    {
        static::$x = $x;
    }
}
