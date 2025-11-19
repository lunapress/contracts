<?php
declare(strict_types=1);

namespace LunaPress\Wp\I18nContracts\LoadPluginTextDomain;

use LunaPress\CoreContracts\Support\IFactory;

defined('ABSPATH') || exit;

interface ILoadPluginTextDomainFactory extends IFactory
{
    public function make(string $domain): ILoadPluginTextDomainFunction;
}
