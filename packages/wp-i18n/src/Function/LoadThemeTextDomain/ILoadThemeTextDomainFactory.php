<?php
declare(strict_types=1);

namespace LunaPress\Wp\I18nContracts\Function\LoadThemeTextDomain;

use LunaPress\FoundationContracts\Support\IFactory;

defined('ABSPATH') || exit;

interface ILoadThemeTextDomainFactory extends IFactory
{
    public function make(string $domain): ILoadThemeTextDomainFunction;
}
