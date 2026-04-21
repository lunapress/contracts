<?php

declare(strict_types=1);

namespace LunaPress\FrontendContracts\Vite;

interface IViteModeDetector
{
    public function isDev(): bool;
}
