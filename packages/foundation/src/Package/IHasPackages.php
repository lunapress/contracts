<?php

declare(strict_types=1);

namespace LunaPress\FoundationContracts\Package;

interface IHasPackages
{
    /**
     * @return IPackage[]|class-string<IPackage>[]
     */
    public function getPackages(): array;
}
