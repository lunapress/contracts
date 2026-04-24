<?php

declare(strict_types=1);

namespace LunaPress\FrontendContracts\Vite\VO;

final readonly class ViteManifestItem
{
    /**
     * @param string[] $css
     */
    public function __construct(
        public string $name,
        public string $file,
        public bool $isCss,
        public bool $isEntry = false,
        public array $css = [],
        public ?string $src = null,
    ) {
    }
}
