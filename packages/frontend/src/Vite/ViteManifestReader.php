<?php

declare(strict_types=1);

namespace LunaPress\FrontendContracts\Vite;

use LunaPress\FrontendContracts\Vite\VO\ViteManifest;

interface ViteManifestReader
{
    public function getManifest(): ViteManifest;
}
