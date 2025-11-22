<?php
declare(strict_types=1);

namespace LunaPress\Wp\I18nContracts\Function\ContextPluralTranslate;

use LunaPress\FoundationContracts\Support\IFactory;
use LunaPress\Wp\I18nContracts\Function\ContextPluralTranslate\IContextPluralTranslateFunction;

defined('ABSPATH') || exit;

interface IContextPluralTranslateFactory extends IFactory
{
    public function make(string $single, string $plural, int $number, string $context): IContextPluralTranslateFunction;
}
