<?php

declare(strict_types=1);

namespace LunaPress\Wp\I18nContracts\Function\LoadChildThemeTextDomain;

use LunaPress\FoundationContracts\Support\IExecutableFunction;
use LunaPress\Wp\I18nContracts\Capability\IHasDomain;



interface ILoadChildThemeTextDomainFunction extends IExecutableFunction, IHasDomain
{
    public function path(string|false $path): static;

    public function getPath(): string|false;
}
