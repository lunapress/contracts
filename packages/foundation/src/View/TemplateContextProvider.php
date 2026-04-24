<?php

declare(strict_types=1);

namespace LunaPress\FoundationContracts\View;

interface TemplateContextProvider
{
    /**
     * @return array<string, mixed>
     */
    public function getContext(): array;
}
