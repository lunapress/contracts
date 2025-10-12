<?php
declare(strict_types=1);

namespace LunaPress\FoundationContracts\Container;

defined('ABSPATH') || exit;

interface IDefinitionFactory
{
    public function autowire(string $class): IDefinition;
    public function factory(callable $callback): IDefinition;
}
