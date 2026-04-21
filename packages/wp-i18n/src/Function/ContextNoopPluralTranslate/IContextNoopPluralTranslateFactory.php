<?php

declare(strict_types=1);

namespace LunaPress\Wp\I18nContracts\Function\ContextNoopPluralTranslate;

use LunaPress\FoundationContracts\Support\IFactory;



interface IContextNoopPluralTranslateFactory extends IFactory
{
    public function make(string $single, string $plural, string $context): IContextNoopPluralTranslateFunction;
}
