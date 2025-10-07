<?php
declare(strict_types=1);

namespace Lunapress\CoreContracts\Package;

use Lunapress\CoreContracts\Plugin\IContext;
use Lunapress\CoreContracts\Support\Bootable;
use Lunapress\CoreContracts\Module\HasModules;
use Lunapress\CoreContracts\Support\HasDi;

defined('ABSPATH') || exit;

interface IPackage extends Bootable, HasModules, HasDi
{
    public function activate(IContext $context): void;
    public function deactivate(IContext $context): void;
}
