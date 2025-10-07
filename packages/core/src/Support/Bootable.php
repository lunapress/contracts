<?php
declare(strict_types=1);

namespace Lunapress\CoreContracts\Support;

defined('ABSPATH') || exit;

interface Bootable
{
    public function boot(): void;
}
