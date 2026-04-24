<?php

declare(strict_types=1);

namespace LunaPress\FrontendContracts\Vite;

interface ViteEnvDetector
{
    public function isDev(): bool;
}
