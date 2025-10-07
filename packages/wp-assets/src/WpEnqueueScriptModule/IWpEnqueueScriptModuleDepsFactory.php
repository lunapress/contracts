<?php
declare(strict_types=1);

namespace LunaPress\Wp\AssetsContracts\WpEnqueueScriptModule;

use LunaPress\CoreContracts\Support\WpFunction\IWpFunctionArgsFactory;

defined('ABSPATH') || exit;

interface IWpEnqueueScriptModuleDepsFactory extends IWpFunctionArgsFactory
{
    public function make(): IWpEnqueueScriptModuleDeps;
}
