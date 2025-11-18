<?php
declare(strict_types=1);

namespace LunaPress\FrontendContracts\Vite;

defined('ABSPATH') || exit;

interface IViteEntryPoint
{
    public function getName(): string;
}
