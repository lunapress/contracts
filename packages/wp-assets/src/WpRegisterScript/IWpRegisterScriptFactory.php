<?php
declare(strict_types=1);

namespace LunaPress\Wp\AssetsContracts\WpRegisterScript;

use LunaPress\FoundationContracts\Support\IFactory;

defined('ABSPATH') || exit;

interface IWpRegisterScriptFactory extends IFactory
{
    public function make(string $handle, string|false $src): IWpRegisterScriptFunction;
}
