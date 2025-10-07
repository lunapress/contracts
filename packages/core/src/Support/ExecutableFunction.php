<?php
declare(strict_types=1);

namespace LunaPress\CoreContracts\Support;

defined('ABSPATH') || exit;

interface ExecutableFunction
{
    public function rawArgs(): array;

    public function executeWithArgs(array $args);
}
