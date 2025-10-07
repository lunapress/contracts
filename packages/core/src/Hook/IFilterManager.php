<?php
declare(strict_types=1);

namespace Lunapress\CoreContracts\Hook;

defined('ABSPATH') || exit;

interface IFilterManager
{
    public function add(string $name, callable $callback, int $priority = 10, int $args = 1): void;

    public function apply(string $name, mixed $value, mixed ...$args): mixed;
}
