<?php
declare(strict_types=1);

namespace Lunapress\CoreContracts\Plugin;

use Lunapress\CoreContracts\Support\Activatable;
use Lunapress\CoreContracts\Support\Deactivatable;
use Lunapress\CoreContracts\Support\Bootable;
use Lunapress\CoreContracts\Support\HasDi;
use Lunapress\CoreContracts\Module\MutableModules;
use Lunapress\CoreContracts\Package\MutablePackages;

defined('ABSPATH') || exit;

interface IPlugin extends Activatable, Deactivatable, MutableModules, MutablePackages, Bootable, HasDi
{
    public function getPrefix(): string;
}
