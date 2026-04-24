<?php

declare(strict_types=1);

namespace LunaPress\FoundationContracts\Package;

use LunaPress\FoundationContracts\Module\HasModules;
use LunaPress\FoundationContracts\Plugin\Context;
use LunaPress\FoundationContracts\Support\Bootable;
use LunaPress\FoundationContracts\Support\HasDi;

interface Package extends Bootable, HasModules, HasDi
{
    public function activate(Context $context): void;
    public function deactivate(Context $context): void;
}
