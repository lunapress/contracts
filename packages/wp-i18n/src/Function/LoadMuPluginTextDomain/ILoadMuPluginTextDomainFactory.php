<?php
declare(strict_types=1);

namespace LunaPress\Wp\I18nContracts\Function\LoadMuPluginTextDomain;

use LunaPress\FoundationContracts\Support\IFactory;

defined('ABSPATH') || exit;

interface ILoadMuPluginTextDomainFactory extends IFactory
{
    public function make(string $domain): ILoadMuPluginTextDomainFunction;
}
