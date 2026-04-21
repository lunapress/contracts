<?php

declare(strict_types=1);

namespace LunaPress\Wp\I18nContracts\Function\NumberFormatI18n;

use LunaPress\FoundationContracts\Support\IFactory;



interface INumberFormatI18nFactory extends IFactory
{
    public function make(float $number): INumberFormatI18nFunction;
}
