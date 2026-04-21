<?php

declare(strict_types=1);

namespace LunaPress\FrontendContracts\Vite;

interface IViteConfig
{
    public function getBuildVitePath(): string;
    public function getBuildViteUrl(): string;
    public function getPluginVersion(): string;
}
