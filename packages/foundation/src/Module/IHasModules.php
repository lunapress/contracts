<?php
declare(strict_types=1);

namespace LunaPress\FoundationContracts\Module;

defined('ABSPATH') || exit;

interface IHasModules
{
    /**
     * @return IModule[]|class-string<IModule>[]
     */
    public function getModules(): array;
}
