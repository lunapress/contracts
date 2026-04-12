<?php
declare(strict_types=1);

namespace LunaPress\Wp\I18nContracts\Function\SwitchToLocale;

use LunaPress\FoundationContracts\Support\IFactory;

defined('ABSPATH') || exit;

interface ISwitchToLocaleFactory extends IFactory
{
    public function make(string $locale): ISwitchToLocaleFunction;
}
