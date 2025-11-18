<?php
declare(strict_types=1);

namespace LunaPress\FoundationContracts\Package;

use LunaPress\FoundationContracts\Plugin\IContext;
use LunaPress\FoundationContracts\Support\IBootable;
use LunaPress\FoundationContracts\Module\IHasModules;
use LunaPress\FoundationContracts\Support\IHasDi;

defined('ABSPATH') || exit;

interface IPackage extends IBootable, IHasModules, IHasDi
{
    public function activate(IContext $context): void;
    public function deactivate(IContext $context): void;
}
