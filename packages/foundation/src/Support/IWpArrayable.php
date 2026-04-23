<?php

declare(strict_types=1);

namespace LunaPress\FoundationContracts\Support;

interface IWpArrayable
{
    /**
     * @return array<string, mixed>
     */
    public function toWpArray(): array;
}
