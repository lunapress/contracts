<?php

declare(strict_types=1);

namespace LunaPress\FoundationContracts\ServicePackage;

use LunaPress\FoundationContracts\PackageMeta\IPackageMeta;



interface IServicePackageMeta extends IPackageMeta
{
    public function getDiPath(): ?string;
}
