<?php
declare(strict_types=1);

namespace Lunapress\CoreContracts\Module;

defined('ABSPATH') || exit;

interface MutableModules extends HasModules
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
