<?php
declare(strict_types=1);

namespace LunaPress\Wp\AssetsContracts\Function\WpEnqueueScriptModule;

use LunaPress\FoundationContracts\Support\IFactory;
use LunaPress\Wp\AssetsContracts\Function\WpEnqueueScriptModule\IWpEnqueueScriptModuleFunction;

defined('ABSPATH') || exit;

interface IWpEnqueueScriptModuleFactory extends IFactory
{
    public function make(string $id): IWpEnqueueScriptModuleFunction;
}
