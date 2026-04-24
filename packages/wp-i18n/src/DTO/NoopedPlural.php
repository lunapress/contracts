<?php

declare(strict_types=1);

namespace LunaPress\Wp\I18nContracts\DTO;

final readonly class NoopedPlural
{
    public function __construct(
        public string $single,
        public string $plural,
        public ?string $context = null,
        public ?string $domain = null,
    ) {
    }
}
