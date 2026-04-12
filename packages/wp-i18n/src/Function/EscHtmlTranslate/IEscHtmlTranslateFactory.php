<?php
declare(strict_types=1);

namespace LunaPress\Wp\I18nContracts\Function\EscHtmlTranslate;

use LunaPress\FoundationContracts\Support\IFactory;

defined('ABSPATH') || exit;

interface IEscHtmlTranslateFactory extends IFactory
{
    public function make(string $text): IEscHtmlTranslateFunction;
}
