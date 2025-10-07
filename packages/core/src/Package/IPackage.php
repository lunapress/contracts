<?php
declare(strict_types=1);

namespace LunaPress\CoreContracts\Package;

use LunaPress\CoreContracts\Plugin\IContext;
use LunaPress\CoreContracts\Support\Bootable;
use LunaPress\CoreContracts\Module\HasModules;
use LunaPress\CoreContracts\Support\HasDi;

defined('ABSPATH') || exit;

interface IPackage extends Bootable, HasModules, HasDi
{
    public function activate(IContext $context): void;
    public function deactivate(IContext $context): void;
}
