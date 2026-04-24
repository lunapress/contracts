<?php

declare(strict_types=1);

namespace LunaPress\CoreContracts\Plugin;

use LunaPress\FoundationContracts\Plugin\Context;

final readonly class PluginContext
{
    public function __construct(
        public Context $context,
    ) {
    }
}
