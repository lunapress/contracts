<?php
declare(strict_types=1);

namespace LunaPress\Wp\I18nContracts\Function\UnloadTextDomain;

use LunaPress\FoundationContracts\Support\IFactory;

defined('ABSPATH') || exit;

interface IUnloadTextDomainFactory extends IFactory
{
    public function make(string $domain): IUnloadTextDomainFunction;
}
