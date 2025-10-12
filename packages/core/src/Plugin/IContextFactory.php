<?php
declare(strict_types=1);

namespace LunaPress\CoreContracts\Plugin;

defined('ABSPATH') || exit;

interface IContextFactory
{
    public function make(IPlugin $plugin): IWordPressContext;
}
