<?php

declare(strict_types=1);

namespace LunaPress\Wp\I18nContracts\Function\IsTextDomainLoaded;

use LunaPress\FoundationContracts\Support\IFactory;



interface IIsTextDomainLoadedFactory extends IFactory
{
    public function make(string $domain): IIsTextDomainLoadedFunction;
}
