<?php

declare(strict_types=1);

namespace LunaPress\FoundationContracts\Module;

interface MutableModules extends HasModules
{
    /**
     * @param Module|class-string<Module> $module
     */
    public function registerModule(Module|string $module): void;

    /**
     * @param Module[]|class-string<Module>[] $modules
     */
    public function registerModules(array $modules): void;
}
