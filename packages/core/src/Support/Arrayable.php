<?php
declare(strict_types=1);

namespace Lunapress\CoreContracts\Support;

defined('ABSPATH') || exit;

interface Arrayable
{
    public function toArray(): array;
}
