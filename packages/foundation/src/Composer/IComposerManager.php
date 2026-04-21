<?php

declare(strict_types=1);

namespace LunaPress\FoundationContracts\Composer;

interface IComposerManager
{
    public function getCurrentLoaderPath(): string;
    public function getInstalledPackages(): array;
    public function getInstallPath(string $packageName): ?string;
}
