<?php
declare(strict_types=1);

namespace LunaPress\Wp\I18nContracts\Function\LoadPluginTextDomain;

use LunaPress\FoundationContracts\Support\IExecutableFunction;

defined('ABSPATH') || exit;

interface ILoadPluginTextDomainFunction extends IExecutableFunction
{
    public function domain(string $domain): static;
    public function pluginRelPath(string|false $pluginRelPath): static;

    public function getDomain(): string;
    public function getPluginRelPath(): string|false;
}
