<?php

declare(strict_types=1);

namespace LunaPress\CoreContracts\Plugin;

interface IConfigFactory
{
    public function make(IPlugin $plugin): IConfig;
}
