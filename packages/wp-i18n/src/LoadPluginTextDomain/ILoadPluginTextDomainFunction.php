<?php
declare(strict_types=1);

namespace LunaPress\Wp\I18nContracts\LoadPluginTextDomain;

use LunaPress\CoreContracts\Support\IExecutableFunction;

defined('ABSPATH') || exit;

interface ILoadPluginTextDomainFunction extends IExecutableFunction
{
    public function domain(string $domain): self;
    public function pluginRelPath(string|false $pluginRelPath): self;

    public function getDomain(): string;
    public function getPluginRelPath(): string|false;
}
