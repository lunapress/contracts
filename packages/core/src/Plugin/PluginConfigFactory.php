<?php

declare(strict_types=1);

namespace LunaPress\CoreContracts\Plugin;

use LunaPress\FoundationContracts\Support\Factory;

interface PluginConfigFactory extends Factory
{
    public function make(Plugin $plugin): PluginConfig;
}
