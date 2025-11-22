<?php
declare(strict_types=1);

namespace LunaPress\Wp\AssetsContracts\Function\WpRegisterScript;

use LunaPress\FoundationContracts\Support\IFactory;
use LunaPress\Wp\AssetsContracts\Function\WpRegisterScript\IWpRegisterScriptFunction;

defined('ABSPATH') || exit;

interface IWpRegisterScriptFactory extends IFactory
{
    public function make(string $handle, string|false $src): IWpRegisterScriptFunction;
}
