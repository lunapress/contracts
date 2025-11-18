<?php
declare(strict_types=1);

namespace LunaPress\Wp\AssetsContracts\WpEnqueueStyle;

use LunaPress\CoreContracts\Support\IFactory;

defined('ABSPATH') || exit;

interface IWpEnqueueStyleFactory extends IFactory
{
    public function make(string $handle): IWpEnqueueStyleFunction;
}
