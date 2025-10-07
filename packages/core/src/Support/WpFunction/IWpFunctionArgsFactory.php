<?php
declare(strict_types=1);

namespace Lunapress\CoreContracts\Support\WpFunction;

use Lunapress\CoreContracts\Support\Factory;

defined('ABSPATH') || exit;

interface IWpFunctionArgsFactory extends Factory
{
    public function make(): WpFunctionArgs;
}
