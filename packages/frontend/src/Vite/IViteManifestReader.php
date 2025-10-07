<?php
declare(strict_types=1);

namespace LunaPress\FrontendContracts\Vite;

defined('ABSPATH') || exit;

interface IViteManifestReader
{
    public function getManifest(): IViteManifest;
    public function getEntry(string $name): ?IViteEntry;
}
