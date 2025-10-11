<?php
declare(strict_types=1);

namespace LunaPress\FoundationContracts\Plugin;

defined('ABSPATH') || exit;

interface IContext
{
    public function getPrefix(): string;
    public function getNamespace(): string;
}
