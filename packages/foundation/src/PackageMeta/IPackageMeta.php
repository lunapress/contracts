<?php

declare(strict_types=1);

namespace LunaPress\FoundationContracts\PackageMeta;

interface IPackageMeta
{
    public function getName(): string;
    public function getType(): PackageType;
}
