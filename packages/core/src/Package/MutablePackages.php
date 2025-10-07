<?php
declare(strict_types=1);

namespace Lunapress\CoreContracts\Package;

defined('ABSPATH') || exit;

interface MutablePackages extends HasPackages
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
