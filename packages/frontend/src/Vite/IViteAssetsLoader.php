<?php
declare(strict_types=1);

namespace LunaPress\FrontendContracts\Vite;

use LunaPress\Wp\AssetsContracts\IAssetDependency;
use LunaPress\Wp\AssetsContracts\WpEnqueueScriptModule\IWpEnqueueScriptModuleDep;

defined('ABSPATH') || exit;

interface IViteAssetsLoader
{
    /**
     * @param IViteEntryPoint[] $entryPoints
     * @param bool $isAdmin
     * @param array<IWpEnqueueScriptModuleDep|IAssetDependency> $dependencies
     * @return void
     */
    public function connect(array $entryPoints, bool $isAdmin = false, array $dependencies = []): void;
}
