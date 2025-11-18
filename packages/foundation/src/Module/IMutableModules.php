<?php
declare(strict_types=1);

namespace LunaPress\FoundationContracts\Module;

defined('ABSPATH') || exit;

interface IMutableModules extends IHasModules
{
    /**
     * @param IModule|class-string<IModule> $module
     * @return void
     */
    public function registerModule(IModule|string $module): void;

    /**
     * @param IModule[]|class-string<IModule>[] $modules
     */
    public function registerModules(array $modules): void;
}
