<?php
declare(strict_types=1);

namespace LunaPress\FoundationContracts\PackageMeta;

defined('ABSPATH') || exit;

interface IPackageMetaFactory
{
    /**
     * @param array<class-string> $autoLoaders
     * @return iterable<PackageMeta>
     */
    public function createAll(array $autoLoaders = []): iterable;
    public function create(string $packageName): ?PackageMeta;
}
