<?php
declare(strict_types=1);

namespace LunaPress\FoundationContracts\PackageMeta;

defined('ABSPATH') || exit;

interface IPackageMetaFactory
{
    /**
     * @return iterable<IPackageMeta>
     */
    public function createAll(): iterable;
    public function create(string $packageName): ?IPackageMeta;
}
