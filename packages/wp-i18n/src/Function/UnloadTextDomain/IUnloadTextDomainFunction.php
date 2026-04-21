<?php

declare(strict_types=1);

namespace LunaPress\Wp\I18nContracts\Function\UnloadTextDomain;

use LunaPress\FoundationContracts\Support\IExecutableFunction;
use LunaPress\Wp\I18nContracts\Capability\IHasDomain;



interface IUnloadTextDomainFunction extends IExecutableFunction, IHasDomain
{
    public function reloadable(bool $reloadable): static;

    public function isReloadable(): bool;
}
