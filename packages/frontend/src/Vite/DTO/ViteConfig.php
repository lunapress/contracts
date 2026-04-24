<?php

declare(strict_types=1);

namespace LunaPress\FrontendContracts\Vite\DTO;

use LunaPress\FrontendContracts\Vite\Enum\ViteMode;

final readonly class ViteConfig
{
    public function __construct(
        public string $buildVitePath,
        public string $buildViteUrl,
        public string $pluginVersion,
        public ViteMode $mode,
    ) {
    }
}
