<?php

declare(strict_types=1);

namespace LunaPress\FoundationContracts\Package;

interface IMutablePackages extends IHasPackages
{
    /**
     * @param IPackage|class-string<IPackage> $package
     */
    public function registerPackage(IPackage|string $package): void;

    /**
     * @param IPackage[]|class-string<IPackage>[] $packages
     */
    public function registerPackages(array $packages): void;
}
