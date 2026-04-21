<?php

declare(strict_types=1);

namespace LunaPress\FrontendContracts\Vite;

interface IViteManifestReader
{
    public function getManifest(): IViteManifest;
    public function getEntry(string $name): ?IViteEntry;
}
