<?php

declare(strict_types=1);

namespace LunaPress\Wp\AssetsContracts\DTO;

use BackedEnum;
use LunaPress\FoundationContracts\Support\WpFunction\IWpResolvable;
use LunaPress\FoundationContracts\Support\WpFunction\WpUnset;
use LunaPress\Wp\AssetsContracts\Enum\ScriptModuleImport;

final readonly class ScriptModuleDependency implements IWpResolvable
{
    public function __construct(
        public string|BackedEnum $id,
        public ScriptModuleImport|WpUnset $import = WpUnset::Value,
    ) {
    }

    /**
     * @return string|array<string, mixed>
     */
    public function toWpValue(): string|array
    {
        $idString = $this->id instanceof BackedEnum ? (string) $this->id->value : $this->id;
        $extra = [];

        if ($this->import !== WpUnset::Value) {
            $extra['import'] = $this->import->value;
        }

        if ($extra === []) {
            return $idString;
        }

        return ['id' => $idString, ...$extra];
    }
}
