<?php

declare(strict_types=1);

namespace Symplify\PHPStanRules\Tests\Rules\CheckRequiredMethodNamingRule\Fixture;

final class ClassUsingRequiredByTrait
{
    use RequiredByTrait;
}
