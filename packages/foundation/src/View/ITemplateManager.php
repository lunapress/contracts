<?php
declare(strict_types=1);

namespace LunaPress\FoundationContracts\View;

defined('ABSPATH') || exit;

interface ITemplateManager
{
    public function setBasePath(string $path): self;
    public function render(string $template, array|ITemplateContextProvider ...$contexts): void;
    public function get(string $template, array|ITemplateContextProvider ...$contexts): string;
}
