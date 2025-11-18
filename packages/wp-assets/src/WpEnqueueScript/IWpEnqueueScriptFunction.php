<?php
declare(strict_types=1);

namespace LunaPress\Wp\AssetsContracts\WpEnqueueScript;

use LunaPress\CoreContracts\Support\IExecutableFunction;
use LunaPress\Wp\AssetsContracts\IAssetDependency;

defined('ABSPATH') || exit;

interface IWpEnqueueScriptFunction extends IExecutableFunction
{
    public function getHandle(): string;
    public function getSrc(): string|null;
    /**
     * @return IAssetDependency[]|null
     */
    public function getDeps(): array|null;
    public function getVersion(): string|bool|null;
    /**
     * @return IWpEnqueueScriptArgs|bool|null
     */
    public function getArgs(): IWpEnqueueScriptArgs|bool|null;

    public function handle(string $handle): self;
    public function src(string|null $src): self;
    /**
     * @param IAssetDependency[]|null $deps
     * @return self
     */
    public function deps(array|null $deps): self;
    public function version(string|bool|null $version): self;
    public function args(IWpEnqueueScriptArgs|bool|null $args): self;
}
