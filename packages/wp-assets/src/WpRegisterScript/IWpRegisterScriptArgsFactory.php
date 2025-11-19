<?php
declare(strict_types=1);

namespace LunaPress\Wp\AssetsContracts\WpRegisterScript;

use LunaPress\FoundationContracts\Support\WpFunction\IWpFunctionArgsFactory;

defined('ABSPATH') || exit;

interface IWpRegisterScriptArgsFactory extends IWpFunctionArgsFactory
{
    public function make(): IWpRegisterScriptArgs;
}
