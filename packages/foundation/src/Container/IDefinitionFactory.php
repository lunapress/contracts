<?php

declare(strict_types=1);

namespace LunaPress\FoundationContracts\Container;

interface IDefinitionFactory
{
    public function autowire(string $class): IDefinition;
    public function factory(callable $callback): IDefinition;
}
