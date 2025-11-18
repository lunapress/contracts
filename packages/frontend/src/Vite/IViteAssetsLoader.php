<?php
declare(strict_types=1);

namespace LunaPress\FrontendContracts\Vite;

use LunaPress\Wp\AssetsContracts\WpEnqueueScriptModule\IWpEnqueueScriptModuleDep;

defined('ABSPATH') || exit;

interface IViteAssetsLoader
{
    /**
     * @param ViteEntryPoint[] $entryPoints
     * @param bool $isAdmin
     * @param array<string|IWpEnqueueScriptModuleDep> $dependencies
     * @return void
     */
    public function connect(array $entryPoints, bool $isAdmin = false, array $dependencies = []): void;
}
