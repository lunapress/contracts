<?php
declare(strict_types=1);

namespace LunaPress\Wp\AssetsContracts\WpEnqueueScript;

use LunaPress\CoreContracts\Support\IFactory;

defined('ABSPATH') || exit;

interface IWpEnqueueScriptFactory extends IFactory
{
    public function make(string $handle): IWpEnqueueScriptFunction;
}
