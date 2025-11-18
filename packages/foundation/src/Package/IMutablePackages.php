<?php
declare(strict_types=1);

namespace LunaPress\FoundationContracts\Package;

defined('ABSPATH') || exit;

interface IMutablePackages extends IHasPackages
{
    /**
     * @param IPackage|class-string<IPackage> $package
     * @return void
     */
    public function registerPackage(IPackage|string $package): void;

    /**
     * @param IPackage[]|class-string<IPackage>[] $packages
     */
    public function registerPackages(array $packages): void;
}
