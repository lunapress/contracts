<?php

declare(strict_types=1);

namespace LunaPress\FoundationContracts\PackageMeta;

readonly class PackageMeta
{
    public function __construct(
        public string $name,
        public PackageType $type,
    ) {
    }
}
