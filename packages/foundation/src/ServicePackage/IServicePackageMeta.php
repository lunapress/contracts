<?php
declare(strict_types=1);

namespace LunaPress\FoundationContracts\ServicePackage;

use LunaPress\FoundationContracts\PackageMeta\PackageMeta;

defined('ABSPATH') || exit;

interface IServicePackageMeta extends PackageMeta
{
    public function getDiPath(): ?string;
}
