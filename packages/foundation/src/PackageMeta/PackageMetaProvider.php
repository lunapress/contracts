<?php

declare(strict_types=1);

namespace LunaPress\FoundationContracts\PackageMeta;

interface PackageMetaProvider
{
    /**
     * @return iterable<PackageMeta>
     */
    public function all(): iterable;
}
