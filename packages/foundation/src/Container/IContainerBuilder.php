<?php
declare(strict_types=1);

namespace LunaPress\FoundationContracts\Container;

use Psr\Container\ContainerInterface;

defined('ABSPATH') || exit;

interface IContainerBuilder
{
    public function addDefinitions(string|array $definitions): void;
    public function build(): ContainerInterface;
}
