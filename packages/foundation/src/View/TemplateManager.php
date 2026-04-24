<?php

declare(strict_types=1);

namespace LunaPress\FoundationContracts\View;

interface TemplateManager
{
    public function setBasePath(string $path): self;
    public function render(string $template, array|TemplateContextProvider ...$contexts): void;
    public function get(string $template, array|TemplateContextProvider ...$contexts): string;
}
