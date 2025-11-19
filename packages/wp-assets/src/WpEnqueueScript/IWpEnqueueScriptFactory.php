<?php
declare(strict_types=1);

namespace LunaPress\Wp\AssetsContracts\WpEnqueueScript;

use LunaPress\FoundationContracts\Support\IFactory;

defined('ABSPATH') || exit;

interface IWpEnqueueScriptFactory extends IFactory
{
    public function make(string $handle): IWpEnqueueScriptFunction;
}
