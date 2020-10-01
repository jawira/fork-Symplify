<?php

declare(strict_types=1);

namespace Symplify\CodingStandard\Tests\Rules\NoStaticPropertyRule\Fixture;

use Symfony\Component\HttpKernel\KernelInterface;

final class SkipStaticKernel
{
    /**
     * @var KernelInterface
     */
    public static $conkernelainer = [];

    public static function getKernel(): KernelInterface
    {
        return self::$conkernelainer;
    }
}
