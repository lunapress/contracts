<?php
declare(strict_types=1);

namespace LunaPress\CoreContracts\Support\WpFunction;

use LunaPress\CoreContracts\Support\Factory;

defined('ABSPATH') || exit;

interface IWpFunctionArgsFactory extends Factory
{
    public function make(): WpFunctionArgs;
}
