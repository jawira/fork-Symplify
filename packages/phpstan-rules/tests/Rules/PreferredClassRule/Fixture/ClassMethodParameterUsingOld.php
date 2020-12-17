<?php

declare(strict_types=1);

namespace Symplify\PHPStanRules\Tests\Rules\PreferredClassRule\Fixture;

use DateTime;

final class ClassMethodParameterUsingOld
{
    public function run(DateTime $dateTime)
    {
        return $dateTime;
    }
}
