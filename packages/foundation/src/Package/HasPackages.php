<?php

declare(strict_types=1);

namespace LunaPress\FoundationContracts\Package;

interface HasPackages
{
    /**
     * @return Package[]|class-string<Package>[]
     */
    public function getPackages(): array;
}
