<?php

declare(strict_types=1);

namespace LunaPress\FoundationContracts\Container;

use LunaPress\FoundationContracts\Support\Factory;

interface DefinitionFactory extends Factory
{
    public function autowire(string $class): Definition;
    public function factory(callable $callback): Definition;
}
