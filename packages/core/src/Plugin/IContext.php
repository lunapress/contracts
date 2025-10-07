<?php
declare(strict_types=1);

namespace Lunapress\CoreContracts\Plugin;

defined('ABSPATH') || exit;

interface IContext
{
    public function getPrefix(): string;
    public function getNamespace(): string;
}
