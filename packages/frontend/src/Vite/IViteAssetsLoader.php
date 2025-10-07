<?php
declare(strict_types=1);

namespace LunaPress\FrontendContracts\Vite;

use LunaPress\Wp\AssetsContracts\IAssetDependency;

defined('ABSPATH') || exit;

interface IViteAssetsLoader
{
    /**
     * @param ViteEntryPoint[] $entryPoints
     * @param IAssetDependency[] $dependency
     * @param bool $isAdmin
     * @return void
     */
    public function connect(array $entryPoints, array $dependency = [], bool $isAdmin = false): void;
}
