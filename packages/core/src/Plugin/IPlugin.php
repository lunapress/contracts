<?php
declare(strict_types=1);

namespace LunaPress\CoreContracts\Plugin;

use LunaPress\CoreContracts\Support\Activatable;
use LunaPress\CoreContracts\Support\Deactivatable;
use LunaPress\CoreContracts\Support\Bootable;
use LunaPress\CoreContracts\Support\HasDi;
use LunaPress\CoreContracts\Module\MutableModules;
use LunaPress\CoreContracts\Package\MutablePackages;

defined('ABSPATH') || exit;

interface IPlugin extends Activatable, Deactivatable, MutableModules, MutablePackages, Bootable, HasDi
{
    public function getPrefix(): string;
}
