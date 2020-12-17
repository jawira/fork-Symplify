<?php

declare(strict_types=1);

namespace Symplify\PHPStanRules\Tests\Rules\CheckTypehintCallerTypeRule\Fixture;

use PhpParser\Node;
use PhpParser\Node\Expr\MethodCall;
use PhpParser\Node\Expr\PropertyFetch;

class SkipMultipleUsed
{
    public function run(Node $node)
    {
        if ($node instanceof MethodCall) {
            $this->isCheck($node);
        }

        if ($node instanceof PropertyFetch) {
            $this->isCheck($node);
        }
    }

    private function isCheck(Node $node)
    {
    }
}
