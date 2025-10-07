<?php
declare(strict_types=1);

namespace Lunapress\CoreContracts\Package;

defined('ABSPATH') || exit;

interface HasPackages
{
    /**
     * @return IPackage[]|class-string<IPackage>[]
     */
    public function getPackages(): array;
}
