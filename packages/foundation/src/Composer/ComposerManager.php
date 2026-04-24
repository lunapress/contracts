<?php

declare(strict_types=1);

namespace LunaPress\FoundationContracts\Composer;

interface ComposerManager
{
    public function getCurrentLoaderPath(): string;

    /**
     * @return mixed[]
     */
    public function getInstalledPackages(): array;
    public function getInstallPath(string $packageName): ?string;
}
