<?php

declare(strict_types=1);

namespace LunaPress\Wp\I18nContracts\Function\GetLocale;

use LunaPress\FoundationContracts\Support\IFactory;



interface IGetLocaleFactory extends IFactory
{
    public function make(): IGetLocaleFunction;
}
