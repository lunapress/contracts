<?php
declare(strict_types=1);

namespace LunaPress\CoreContracts\Plugin;

use LunaPress\FoundationContracts\Container\IContainerBuilder;
use LunaPress\FoundationContracts\Module\IHasModules;
use LunaPress\FoundationContracts\Package\IHasPackages;
use LunaPress\FoundationContracts\Support\IActivatable;
use LunaPress\FoundationContracts\Support\IDeactivatable;
use LunaPress\FoundationContracts\Support\IHasDi;

defined('ABSPATH') || exit;

interface IPlugin extends IActivatable, IDeactivatable, IHasDi, IHasModules, IHasPackages
{
    public function boot(string $callerFile): void;
    public function setContainerBuilder(IContainerBuilder $builder): self;
    public function getPrefix(): string;
    public function getCallerFile(): string;
}
