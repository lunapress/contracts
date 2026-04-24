<?php

declare(strict_types=1);

namespace LunaPress\Wp\AssetsContracts\DTO;

use LunaPress\FoundationContracts\Support\Wp\WpArgument;
use LunaPress\FoundationContracts\Support\Wp\WpUnset;
use LunaPress\Wp\AssetsContracts\Enum\FetchPriority;
use LunaPress\Wp\AssetsContracts\Enum\ScriptStrategy;

final readonly class WpRegisterScriptArgs implements WpArgument
{
    public function __construct(
        public WpUnset|ScriptStrategy $strategy = WpUnset::Value,
        public WpUnset|bool $inFooter = WpUnset::Value,
        public WpUnset|FetchPriority $fetchPriority = WpUnset::Value,
    ) {
    }
}
