<?php
declare(strict_types=1);

namespace LunaPress\Wp\I18nContracts\LoadScriptTextDomain;

use LunaPress\CoreContracts\Support\IFactory;

defined('ABSPATH') || exit;

interface ILoadScriptTextDomainFactory extends IFactory
{
    public function make(string $handle): ILoadScriptTextDomainFunction;
}
