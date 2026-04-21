<?php

declare(strict_types=1);

namespace LunaPress\Wp\I18nContracts\Function\PluralTranslate;

use LunaPress\FoundationContracts\Support\IFactory;
use LunaPress\Wp\I18nContracts\Function\PluralTranslate\IPluralTranslateFunction;



interface IPluralTranslateFactory extends IFactory
{
    public function make(string $single, string $plural, int $number): IPluralTranslateFunction;
}
