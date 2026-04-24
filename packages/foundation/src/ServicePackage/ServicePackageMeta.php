<?php

declare(strict_types=1);

namespace LunaPress\FoundationContracts\ServicePackage;

use LunaPress\FoundationContracts\PackageMeta\PackageMeta;
use LunaPress\FoundationContracts\PackageMeta\PackageType;

final readonly class ServicePackageMeta extends PackageMeta
{
    public function __construct(
        string $name,
        public ?string $diPath,
    ) {
        parent::__construct($name, PackageType::Service);
    }
}
