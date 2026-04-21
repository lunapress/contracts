<?php

declare(strict_types=1);

namespace LunaPress\Wp\I18nContracts\Function\SwitchToLocale;

use LunaPress\FoundationContracts\Support\IExecutableFunction;



interface ISwitchToLocaleFunction extends IExecutableFunction
{
    public function locale(string $locale): static;

    public function getLocale(): string;
}
