<?php
declare(strict_types=1);

namespace LunaPress\Wp\AssetsContracts\WpEnqueueScriptModule;

use LunaPress\CoreContracts\Support\ExecutableFunction;

defined('ABSPATH') || exit;

interface IWpEnqueueScriptModuleFunction extends ExecutableFunction
{
    public function id(string $id): self;

    public function src(string $src): self;

    /**
     * @param IWpEnqueueScriptModuleDeps[] $deps
     * @return self
     */
    public function deps(array $deps): self;

    public function version(string|false|null $version): self;

    public function executeWithArgs(array $args): void;
}
