<?php

declare(strict_types=1);

namespace LunaPress\FrontendContracts\Vite;

use LunaPress\FoundationContracts\Support\Factory;
use LunaPress\FrontendContracts\Vite\VO\ViteManifest;

interface ViteManifestFactory extends Factory
{
    /**
     * @param array<string, mixed> $data
     */
    public function make(array $data): ViteManifest;
}
