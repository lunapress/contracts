<?php
declare(strict_types=1);

namespace LunaPress\Wp\I18nContracts\Function\LoadScriptTextDomain;

use LunaPress\FoundationContracts\Support\IFactory;
use LunaPress\Wp\I18nContracts\Function\LoadScriptTextDomain\ILoadScriptTextDomainFunction;

defined('ABSPATH') || exit;

interface ILoadScriptTextDomainFactory extends IFactory
{
    public function make(string $handle): ILoadScriptTextDomainFunction;
}
