<?php
declare(strict_types=1);

namespace LunaPress\Wp\I18nContracts\Function\EscHtmlContextTranslate;

use LunaPress\FoundationContracts\Support\IFactory;

defined('ABSPATH') || exit;

interface IEscHtmlContextTranslateFactory extends IFactory
{
    public function make(string $text, string $context): IEscHtmlContextTranslateFunction;
}
