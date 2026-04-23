<?php

declare(strict_types=1);

namespace LunaPress\FrontendContracts\Vite;

use BackedEnum;
use LunaPress\Wp\AssetsContracts\DTO\ScriptModuleDependency;

interface IViteAssetsLoader
{
    /**
     * @param IViteEntryPoint[] $entryPoints
     * @param array<ScriptModuleDependency|string|BackedEnum> $dependencies
     */
    public function connect(array $entryPoints, bool $isAdmin = false, array $dependencies = []): void;
}
