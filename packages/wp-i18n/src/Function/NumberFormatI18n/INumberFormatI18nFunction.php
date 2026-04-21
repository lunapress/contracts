<?php

declare(strict_types=1);

namespace LunaPress\Wp\I18nContracts\Function\NumberFormatI18n;

use LunaPress\FoundationContracts\Support\IExecutableFunction;



interface INumberFormatI18nFunction extends IExecutableFunction
{
    public function number(float $number): static;

    public function decimals(int $decimals): static;

    public function getNumber(): float;

    public function getDecimals(): int;
}
