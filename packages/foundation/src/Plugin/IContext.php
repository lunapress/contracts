<?php

declare(strict_types=1);

namespace LunaPress\FoundationContracts\Plugin;

interface IContext
{
    public function getPrefix(): string;
    public function getNamespace(): string;
}
