<?php

declare(strict_types=1);

namespace LunaPress\FrontendContracts\Vite;

use LunaPress\Wp\AssetsContracts\Entity\IAssetDependency;
use LunaPress\Wp\AssetsContracts\Function\WpEnqueueScriptModule\IWpEnqueueScriptModuleDep;



interface IViteAssetsLoader
{
    /**
     * @param IViteEntryPoint[] $entryPoints
     * @param array<IWpEnqueueScriptModuleDep|IAssetDependency> $dependencies
     */
    public function connect(array $entryPoints, bool $isAdmin = false, array $dependencies = []): void;
}
