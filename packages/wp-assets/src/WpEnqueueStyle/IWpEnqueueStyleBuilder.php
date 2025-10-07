<?php
declare(strict_types=1);

namespace LunaPress\Wp\AssetsContracts\WpEnqueueStyle;

use LunaPress\CoreContracts\Support\FunctionBuilder;

defined('ABSPATH') || exit;

interface IWpEnqueueStyleBuilder extends FunctionBuilder
{
    public function make(string $handle): IWpEnqueueStyleFunction;
}
