<?php
declare(strict_types=1);

namespace Lunapress\CoreContracts\Plugin;

defined('ABSPATH') || exit;

interface IConfig
{
    public function getPluginVersion(): string;
    public function getPluginPath(): string;
    public function getPluginUrl(): string;
}
