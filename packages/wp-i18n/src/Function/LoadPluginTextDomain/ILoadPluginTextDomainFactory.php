<?php
declare(strict_types=1);

namespace LunaPress\Wp\I18nContracts\Function\LoadPluginTextDomain;

use LunaPress\FoundationContracts\Support\IFactory;
use LunaPress\Wp\I18nContracts\Function\LoadPluginTextDomain\ILoadPluginTextDomainFunction;

defined('ABSPATH') || exit;

interface ILoadPluginTextDomainFactory extends IFactory
{
    public function make(string $domain): ILoadPluginTextDomainFunction;
}
