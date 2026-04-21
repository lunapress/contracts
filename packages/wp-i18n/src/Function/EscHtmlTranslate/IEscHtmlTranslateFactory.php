<?php

declare(strict_types=1);

namespace LunaPress\Wp\I18nContracts\Function\EscHtmlTranslate;

use LunaPress\FoundationContracts\Support\IFactory;



interface IEscHtmlTranslateFactory extends IFactory
{
    public function make(string $text): IEscHtmlTranslateFunction;
}
