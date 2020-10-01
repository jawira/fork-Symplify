<?php

declare(strict_types=1);

namespace Symplify\MonorepoBuilder\Utils;

use PharIo\Version\Version;
use Symplify\MonorepoBuilder\ValueObject\Option;
use Symplify\PackageBuilder\Parameter\ParameterProvider;

/**
 * @see \Symplify\MonorepoBuilder\Tests\Utils\VersionUtilsTest
 */
final class VersionUtils
{
    /**
     * @var string
     */
    private $packageAliasFormat;

    public function __construct(ParameterProvider $parameterProvider)
    {
        $this->packageAliasFormat = $parameterProvider->provideStringParameter(Option::PACKAGE_ALIAS_FORMAT);
    }

    /**
     * @param Version|string $version
     */
    public function getNextAliasFormat($version): string
    {
        $version = $this->normalizeVersion($version);

        $minor = $this->getNextMinorNumber($version);

        return str_replace(
            ['<major>', '<minor>'],
            [$version->getMajor()->getValue(), $minor],
            $this->packageAliasFormat
        );
    }

    /**
     * @param Version|string $version
     */
    public function getRequiredNextFormat($version): string
    {
        $version = $this->normalizeVersion($version);
        $minor = $this->getNextMinorNumber($version);

        return '^' . $version->getMajor()->getValue() . '.' . $minor;
    }

    /**
     * @param Version|string $version
     */
    public function getRequiredFormat($version): string
    {
        $version = $this->normalizeVersion($version);

        $requireVersion = '^' . $version->getMajor()->getValue() . '.' . $version->getMinor()->getValue();

        $value = $version->getPatch()
            ->getValue();
        if ($value > 0) {
            $requireVersion .= '.' . $value;
        }

        return $requireVersion;
    }

    /**
     * @param Version|string $version
     */
    private function normalizeVersion($version): Version
    {
        if (is_string($version)) {
            return new Version($version);
        }

        return $version;
    }

    private function getNextMinorNumber(Version $version): int
    {
        return $version->hasPreReleaseSuffix() ? (int) $version->getMinor()->getValue() : $version->getMinor()->getValue() + 1;
    }
}
