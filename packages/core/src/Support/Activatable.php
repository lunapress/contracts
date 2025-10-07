<?php
declare(strict_types=1);

namespace LunaPress\CoreContracts\Support;

defined('ABSPATH') || exit;

interface Activatable
{
    public function activate(): void;
}
