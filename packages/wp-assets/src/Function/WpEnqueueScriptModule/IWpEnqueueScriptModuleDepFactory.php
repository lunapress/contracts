<?php
declare(strict_types=1);

namespace LunaPress\Wp\AssetsContracts\Function\WpEnqueueScriptModule;

use LunaPress\FoundationContracts\Support\WpFunction\IWpFunctionArgsFactory;
use LunaPress\Wp\AssetsContracts\Function\WpEnqueueScriptModule\IWpEnqueueScriptModuleDep;

defined('ABSPATH') || exit;

interface IWpEnqueueScriptModuleDepFactory extends IWpFunctionArgsFactory
{
    public function make(): IWpEnqueueScriptModuleDep;
}
