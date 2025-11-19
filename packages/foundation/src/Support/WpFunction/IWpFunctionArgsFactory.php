<?php
declare(strict_types=1);

namespace LunaPress\FoundationContracts\Support\WpFunction;

use LunaPress\FoundationContracts\Support\IFactory;
use LunaPress\FoundationContracts\Support\WpFunction\IWpFunctionArgs;

defined('ABSPATH') || exit;

interface IWpFunctionArgsFactory extends IFactory
{
    public function make(): IWpFunctionArgs;
}
