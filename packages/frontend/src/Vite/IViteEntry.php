<?php
declare(strict_types=1);

namespace LunaPress\FrontendContracts\Vite;

defined('ABSPATH') || exit;

interface IViteEntry extends IViteEntryPoint
{
    public function getFile(): string;
    public function isEntry(): bool;

    /** @return string[] */
    public function getCss(): array;
    public function getSrc(): ?string;
}
