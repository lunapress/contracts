<?php

declare(strict_types=1);

namespace LunaPress\FoundationContracts\PackageMeta;

use LunaPress\FoundationContracts\PackageMeta\Exception\PackageMetaException;
use LunaPress\FoundationContracts\Support\Factory;

interface PackageMetaFactory extends Factory
{
    /**
     * @throws PackageMetaException
     */
    public function make(string $packageName): PackageMeta;
}
