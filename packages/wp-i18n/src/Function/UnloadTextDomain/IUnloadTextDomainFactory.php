<?php
declare(strict_types=1);

namespace LunaPress\Wp\I18nContracts\Function\UnloadTextDomain;

use LunaPress\FoundationContracts\Support\IFactory;
use LunaPress\Wp\I18nContracts\Function\UnloadTextDomain\IUnloadTextDomainFunction;

defined('ABSPATH') || exit;

interface IUnloadTextDomainFactory extends IFactory
{
    public function make(string $domain, bool $reloadable = false): IUnloadTextDomainFunction;
}
