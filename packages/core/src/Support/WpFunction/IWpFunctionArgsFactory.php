<?php
declare(strict_types=1);

namespace LunaPress\CoreContracts\Support\WpFunction;

use LunaPress\CoreContracts\Support\IFactory;

defined('ABSPATH') || exit;

interface IWpFunctionArgsFactory extends IFactory
{
    public function make(): IWpFunctionArgs;
}
