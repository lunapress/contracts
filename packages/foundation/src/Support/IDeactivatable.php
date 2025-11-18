<?php
declare(strict_types=1);

namespace LunaPress\FoundationContracts\Support;

defined('ABSPATH') || exit;

interface IDeactivatable
{
    public function deactivate(): void;
}
