<?php
declare(strict_types=1);

namespace LunaPress\Wp\I18nContracts\LoadPluginTextDomain;

defined('ABSPATH') || exit;

interface ILoadPluginTextDomainFunction
{
    public function domain(string $domain): self;
    public function pluginRelPath(string|false $pluginRelPath): self;

    public function getDomain(): string;
    public function getPluginRelPath(): string|false;
}
