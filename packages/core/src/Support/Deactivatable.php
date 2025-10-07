<?php
declare(strict_types=1);

namespace LunaPress\CoreContracts\Support;

defined('ABSPATH') || exit;

interface Deactivatable
{
    public function deactivate(): void;
}
