<?php

declare(strict_types=1);

namespace LunaPress\FoundationContracts\Support\WpFunction;

use LunaPress\FoundationContracts\Support\IFactory;



interface IWpFunctionArgsFactory extends IFactory
{
    public function make(): IWpFunctionArgs;
}
