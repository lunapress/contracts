<?php
declare(strict_types=1);

namespace LunaPress\Wp\AssetsContracts\WpEnqueueScript;

use LunaPress\CoreContracts\Support\IExecutableFunction;
use LunaPress\Wp\AssetsContracts\IAssetDependency;

defined('ABSPATH') || exit;

interface IWpEnqueueScriptFunction extends IExecutableFunction
{
    public function getHandle(): string;
    public function getSrc(): string;
    /**
     * @return IAssetDependency[]
     */
    public function getDeps(): array;
    public function getVersion(): string|bool;
    /**
     * @return IWpEnqueueScriptArgs|bool
     */
    public function getArgs(): IWpEnqueueScriptArgs|bool;

    public function handle(string $handle): self;
    public function src(string $src): self;
    /**
     * @param IAssetDependency[] $deps
     * @return self
     */
    public function deps(array $deps): self;
    public function version(string|bool $version): self;
    public function args(IWpEnqueueScriptArgs|bool $args): self;
}
