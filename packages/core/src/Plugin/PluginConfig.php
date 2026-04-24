<?php

declare(strict_types=1);

namespace LunaPress\CoreContracts\Plugin;

final readonly class PluginConfig
{
    public function __construct(
        public string $pluginVersion,
        public string $pluginPath,
        public string $pluginUrl,
    ) {
    }
}
