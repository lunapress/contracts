<?php

declare(strict_types=1);

namespace LunaPress\FoundationContracts\Module;

interface HasModules
{
    /**
     * @return Module[]|class-string<Module>[]
     */
    public function getModules(): array;
}
