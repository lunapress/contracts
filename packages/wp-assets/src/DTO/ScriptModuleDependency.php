<?php

declare(strict_types=1);

namespace LunaPress\Wp\AssetsContracts\DTO;

use BackedEnum;
use LunaPress\FoundationContracts\Support\Wp\WpArgument;
use LunaPress\FoundationContracts\Support\Wp\WpUnset;
use LunaPress\Wp\AssetsContracts\Enum\ScriptModuleImport;

final readonly class ScriptModuleDependency implements WpArgument
{
    public function __construct(
        public string|BackedEnum $id,
        public ScriptModuleImport|WpUnset $import = WpUnset::Value,
    ) {
    }
}
