<?php
declare(strict_types=1);

namespace LunaPress\Wp\I18nContracts\Function\LoadMuPluginTextDomain;

use LunaPress\FoundationContracts\Support\IExecutableFunction;

defined('ABSPATH') || exit;

interface ILoadMuPluginTextDomainFunction extends IExecutableFunction
{
    public function domain(string $domain): static;

    public function muPluginRelPath(string $muPluginRelPath): static;

    public function getDomain(): string;

    public function getMuPluginRelPath(): string;
}
