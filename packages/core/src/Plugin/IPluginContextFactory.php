<?php
declare(strict_types=1);

namespace LunaPress\CoreContracts\Plugin;

defined('ABSPATH') || exit;

interface IPluginContextFactory
{
    public function make(IPlugin $plugin): IPluginContext;
}
