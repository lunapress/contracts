<?php

declare(strict_types=1);

namespace LunaPress\FrontendContracts\Vite\DTO;

use BackedEnum;

final readonly class ViteAsset
{
    public function __construct(
        public string|BackedEnum $name,
    ) {
    }
}
