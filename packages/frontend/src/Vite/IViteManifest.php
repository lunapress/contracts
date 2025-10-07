<?php
declare(strict_types=1);

namespace LunaPress\FrontendContracts\Vite;

defined('ABSPATH') || exit;

interface IViteManifest
{
    /** @return IViteEntry[] */
    public function getEntries(): array;
    public function hasEntry(string $name): bool;
    public function getEntry(string $name): ?IViteEntry;
}
