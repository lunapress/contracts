<?php

declare(strict_types=1);

namespace LunaPress\FrontendContracts\Vite\VO;

final readonly class ViteManifest
{
    /**
     * @param array<string, ViteManifestItem> $items
     */
    public function __construct(
        public array $items = [],
    ) {
    }

    public function getItem(string $name): ?ViteManifestItem
    {
        return $this->items[$name] ?? null;
    }
}
