<?php
declare(strict_types=1);

namespace LunaPress\Wp\AssetsContracts\Function\WpEnqueueScript;

use LunaPress\FoundationContracts\Support\IFactory;
use LunaPress\Wp\AssetsContracts\Function\WpEnqueueScript\IWpEnqueueScriptFunction;

defined('ABSPATH') || exit;

interface IWpEnqueueScriptFactory extends IFactory
{
    public function make(string $handle): IWpEnqueueScriptFunction;
}
