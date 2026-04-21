<?php

declare(strict_types=1);

namespace LunaPress\FoundationContracts\Module;

interface IMutableModules extends IHasModules
{
    /**
     * @param IModule|class-string<IModule> $module
     */
    public function registerModule(IModule|string $module): void;

    /**
     * @param IModule[]|class-string<IModule>[] $modules
     */
    public function registerModules(array $modules): void;
}
