<?php

declare(strict_types=1);

namespace LunaPress\Wp\I18nContracts\Function\GetUserLocale;

use LunaPress\FoundationContracts\Support\IFactory;



interface IGetUserLocaleFactory extends IFactory
{
    public function make(): IGetUserLocaleFunction;
}
