<?php

declare(strict_types=1);

namespace LunaPress\FrontendContracts\Vite;

use BackedEnum;
use LunaPress\FrontendContracts\Vite\DTO\ViteAsset;
use LunaPress\Wp\AssetsContracts\DTO\ScriptModuleDependency;

interface ViteAssetsLoader
{
    /**
     * @param ViteAsset[] $assets
     * @param array<ScriptModuleDependency|string|BackedEnum> $dependencies
     */
    public function connect(array $assets, bool $isAdmin = false, array $dependencies = []): void;
}
