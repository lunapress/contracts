<?php
declare(strict_types=1);

namespace LunaPress\Wp\AssetsContracts\Function\WpRegisterScript;

use LunaPress\FoundationContracts\Support\WpFunction\IWpFunctionArgsFactory;
use LunaPress\Wp\AssetsContracts\Function\WpRegisterScript\IWpRegisterScriptArgs;

defined('ABSPATH') || exit;

interface IWpRegisterScriptArgsFactory extends IWpFunctionArgsFactory
{
    public function make(): IWpRegisterScriptArgs;
}
