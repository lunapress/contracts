<?php
declare(strict_types=1);

namespace LunaPress\Wp\AssetsContracts\WpEnqueueScriptModule;

use LunaPress\CoreContracts\Support\Factory;

defined('ABSPATH') || exit;

interface IWpEnqueueScriptModuleFactory extends Factory
{
    public function make(string $id): IWpEnqueueScriptModuleFunction;
}
