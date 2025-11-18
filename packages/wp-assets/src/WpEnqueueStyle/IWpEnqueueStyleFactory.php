<?php
declare(strict_types=1);

namespace LunaPress\Wp\AssetsContracts\WpEnqueueStyle;

use LunaPress\CoreContracts\Support\Factory;

defined('ABSPATH') || exit;

interface IWpEnqueueStyleFactory extends Factory
{
    public function make(string $handle): IWpEnqueueStyleFunction;
}
