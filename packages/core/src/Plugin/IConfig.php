<?php

declare(strict_types=1);

namespace LunaPress\CoreContracts\Plugin;

interface IConfig
{
    public function getPluginVersion(): string;
    public function getPluginPath(): string;
    public function getPluginUrl(): string;
}
