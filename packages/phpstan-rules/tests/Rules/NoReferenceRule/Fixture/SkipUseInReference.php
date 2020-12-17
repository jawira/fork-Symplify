<?php

declare(strict_types=1);

namespace Symplify\PHPStanRules\Tests\Rules\NoReferenceRule\Fixture;

use Nette\Utils\Strings;

final class SkipUseInReference
{
    public function someMethod($filePath)
    {
        return Strings::replace(
            $filePath,
            '#{(.*?)}#m',
            function (array $match) use (&$i, $arguments) {
            }
        );
    }
}
