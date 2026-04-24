<?php

declare(strict_types=1);

namespace LunaPress\FoundationContracts\Support;

interface Arrayable
{
    /**
     * @return array<string, mixed>
     */
    public function toArray(): array;
}
