<?php

declare(strict_types=1);

namespace LunaPress\Wp\I18nContracts\Function\NoopPluralTranslate;

use LunaPress\FoundationContracts\Support\IFactory;



interface INoopPluralTranslateFactory extends IFactory
{
    public function make(string $single, string $plural): INoopPluralTranslateFunction;
}
