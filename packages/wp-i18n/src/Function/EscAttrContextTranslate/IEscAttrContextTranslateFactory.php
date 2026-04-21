<?php

declare(strict_types=1);

namespace LunaPress\Wp\I18nContracts\Function\EscAttrContextTranslate;

use LunaPress\FoundationContracts\Support\IFactory;



interface IEscAttrContextTranslateFactory extends IFactory
{
    public function make(string $text, string $context): IEscAttrContextTranslateFunction;
}
