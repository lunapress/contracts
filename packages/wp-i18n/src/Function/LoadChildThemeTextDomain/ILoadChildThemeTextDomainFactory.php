<?php
declare(strict_types=1);

namespace LunaPress\Wp\I18nContracts\Function\LoadChildThemeTextDomain;

use LunaPress\FoundationContracts\Support\IFactory;

defined('ABSPATH') || exit;

interface ILoadChildThemeTextDomainFactory extends IFactory
{
    public function make(string $domain): ILoadChildThemeTextDomainFunction;
}
