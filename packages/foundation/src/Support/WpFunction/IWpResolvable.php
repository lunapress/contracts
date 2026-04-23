<?php

declare(strict_types=1);

namespace LunaPress\FoundationContracts\Support\WpFunction;

interface IWpResolvable
{
    public function toWpValue(): mixed;
}
