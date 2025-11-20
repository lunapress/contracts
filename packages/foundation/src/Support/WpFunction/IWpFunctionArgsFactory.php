<?php
declare(strict_types=1);

namespace LunaPress\FoundationContracts\Support\WpFunction;

use LunaPress\FoundationContracts\Support\IFactory;

defined('ABSPATH') || exit;

interface IWpFunctionArgsFactory extends IFactory
{
    public function make(): IWpFunctionArgs;
}
