<?php
declare(strict_types=1);

namespace LunaPress\Wp\AssetsContracts\WpEnqueueScriptModule;

use LunaPress\CoreContracts\Support\FunctionBuilder;

defined('ABSPATH') || exit;

interface IWpEnqueueScriptModuleBuilder extends FunctionBuilder
{
    public function make(string $id): IWpEnqueueScriptModuleFunction;
}
