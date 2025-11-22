<?php
declare(strict_types=1);

namespace LunaPress\Wp\AssetsContracts\Function\WpEnqueueScript;

use LunaPress\FoundationContracts\Support\IExecutableFunction;
use LunaPress\FoundationContracts\Support\WpFunction\WpArray;
use LunaPress\Wp\AssetsContracts\Entity\IAssetDependency;
use LunaPress\Wp\AssetsContracts\Function\WpEnqueueScript\IWpEnqueueScriptArgs;

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
     * @return IWpEnqueueScriptArgs|WpArray|bool
     */
    public function getArgs(): IWpEnqueueScriptArgs|WpArray|bool;

    public function handle(string $handle): self;
    public function src(string $src): self;
    /**
     * @param IAssetDependency[] $deps
     * @return self
     */
    public function deps(array $deps): self;
    public function version(string|bool $version): self;
    public function args(IWpEnqueueScriptArgs|WpArray|bool $args): self;
}
