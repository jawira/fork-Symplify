<?php

declare(strict_types=1);

namespace Symplify\CodingStandard\Tests\Rules\NoReturnArrayVariableListRule\Fixture\ValueObject;

final class SkipValueObject
{
    public function get()
    {
        return [1, 2, 3];
    }
}
