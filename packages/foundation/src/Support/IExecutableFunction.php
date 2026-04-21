<?php

declare(strict_types=1);

namespace LunaPress\FoundationContracts\Support;

interface IExecutableFunction
{
    public function rawArgs(): array;

    public function executeWithArgs(array $args);
}
