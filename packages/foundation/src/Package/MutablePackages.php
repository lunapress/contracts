<?php

declare(strict_types=1);

namespace LunaPress\FoundationContracts\Package;

interface MutablePackages extends HasPackages
{
    /**
     * @param Package|class-string<Package> $package
     */
    public function registerPackage(Package|string $package): void;

    /**
     * @param Package[]|class-string<Package>[] $packages
     */
    public function registerPackages(array $packages): void;
}
