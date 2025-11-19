<?php
declare(strict_types=1);

namespace LunaPress\Wp\AssetsContracts\WpEnqueueScriptModule;

use LunaPress\FoundationContracts\Support\WpFunction\IWpFunctionArgsFactory;

defined('ABSPATH') || exit;

interface IWpEnqueueScriptModuleDepFactory extends IWpFunctionArgsFactory
{
    public function make(): IWpEnqueueScriptModuleDep;
}
