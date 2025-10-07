<?php
declare(strict_types=1);

namespace LunaPress\Wp\AssetsContracts\WpRegisterScript;

use LunaPress\CoreContracts\Support\FunctionBuilder;

defined('ABSPATH') || exit;

interface IWpRegisterScriptBuilder extends FunctionBuilder
{
    public function make(string $handle, string|false $src): IWpRegisterScriptFunction;
}
