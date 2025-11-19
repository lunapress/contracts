<?php
declare(strict_types=1);

namespace LunaPress\Wp\I18nContracts\ContextPluralTranslate;

use LunaPress\CoreContracts\Support\IFactory;

defined('ABSPATH') || exit;

interface IContextPluralTranslateFactory extends IFactory
{
    public function make(string $single, string $plural, int $number, string $context): IContextPluralTranslateFunction;
}
