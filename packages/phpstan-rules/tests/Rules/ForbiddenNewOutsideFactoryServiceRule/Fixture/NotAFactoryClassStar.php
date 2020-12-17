<?php

declare(strict_types=1);

namespace Symplify\PHPStanRules\Tests\Rules\ForbiddenNewOutsideFactoryServiceRule\Fixture;

final class NotAFactoryClassStar
{
    public function create()
	{
		return new CarSearch();
	}
}
