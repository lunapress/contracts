<?php

declare(strict_types=1);

namespace LunaPress\FrontendContracts\Vite;

use LunaPress\FoundationContracts\Support\Factory;
use LunaPress\FrontendContracts\Vite\DTO\ViteConfig;

interface ViteConfigFactory extends Factory
{
    public function make(): ViteConfig;
}
