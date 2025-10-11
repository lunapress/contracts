<?php
declare(strict_types=1);

namespace LunaPress\CoreContracts\Plugin;

use LunaPress\FoundationContracts\Support\Activatable;
use LunaPress\FoundationContracts\Support\Deactivatable;
use LunaPress\FoundationContracts\Support\Bootable;
use LunaPress\FoundationContracts\Support\HasDi;
use LunaPress\FoundationContracts\Module\MutableModules;
use LunaPress\FoundationContracts\Package\MutablePackages;

defined('ABSPATH') || exit;

interface IPlugin extends Activatable, Deactivatable, MutableModules, MutablePackages, Bootable, HasDi
{
    public function getPrefix(): string;
}
