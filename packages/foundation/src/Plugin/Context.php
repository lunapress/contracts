<?php

declare(strict_types=1);

namespace LunaPress\FoundationContracts\Plugin;

final readonly class Context
{
    public function __construct(
        public string $prefix,
        public string $namespace,
    ) {
    }
}
