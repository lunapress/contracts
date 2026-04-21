<?php

declare(strict_types=1);

namespace LunaPress\Wp\I18nContracts\Function\DetermineLocale;

use LunaPress\FoundationContracts\Support\IFactory;



interface IDetermineLocaleFactory extends IFactory
{
    public function make(): IDetermineLocaleFunction;
}
