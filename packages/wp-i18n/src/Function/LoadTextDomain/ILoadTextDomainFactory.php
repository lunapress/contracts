<?php
declare(strict_types=1);

namespace LunaPress\Wp\I18nContracts\Function\LoadTextDomain;

use LunaPress\FoundationContracts\Support\IFactory;
use LunaPress\Wp\I18nContracts\Function\LoadTextDomain\ILoadTextDomainFunction;

defined('ABSPATH') || exit;

interface ILoadTextDomainFactory extends IFactory
{
    public function make(string $domain, string $moFile): ILoadTextDomainFunction;
}
