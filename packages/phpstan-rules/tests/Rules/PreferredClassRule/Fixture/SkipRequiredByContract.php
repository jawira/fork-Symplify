<?php

declare(strict_types=1);

namespace Symplify\PHPStanRules\Tests\Rules\PreferredClassRule\Fixture;

use SplFileInfo;
use Symplify\PHPStanRules\Tests\Rules\PreferredClassRule\Source\SplFileInfoContract;

final class SkipRequiredByContract implements SplFileInfoContract
{
    public function process(SplFileInfo $splFileInfo)
    {
    }
}
