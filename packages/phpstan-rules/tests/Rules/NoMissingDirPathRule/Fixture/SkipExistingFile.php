<?php

declare(strict_types=1);

namespace Symplify\PHPStanRules\Tests\Rules\NoMissingDirPathRule\Fixture;

final class SkipExistingFile
{
    public function run()
    {
        $missingFile = __DIR__ . '/FileMissing.php';
    }
}
