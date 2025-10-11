<?php
declare(strict_types=1);

namespace LunaPress\FoundationContracts\Package;

use LunaPress\FoundationContracts\Plugin\IContext;
use LunaPress\FoundationContracts\Support\Bootable;
use LunaPress\FoundationContracts\Module\HasModules;
use LunaPress\FoundationContracts\Support\HasDi;

defined('ABSPATH') || exit;

interface IPackage extends Bootable, HasModules, HasDi
{
    public function activate(IContext $context): void;
    public function deactivate(IContext $context): void;
}
