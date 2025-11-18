<?php
declare(strict_types=1);

namespace LunaPress\Wp\AssetsContracts\WpRegisterScript;

use LunaPress\CoreContracts\Support\Factory;

defined('ABSPATH') || exit;

interface IWpRegisterScriptFactory extends Factory
{
    public function make(string $handle, string|false $src): IWpRegisterScriptFunction;
}
