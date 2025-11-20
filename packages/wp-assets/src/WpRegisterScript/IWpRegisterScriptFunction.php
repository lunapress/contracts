<?php
declare(strict_types=1);

namespace LunaPress\Wp\AssetsContracts\WpRegisterScript;

use LunaPress\FoundationContracts\Support\IExecutableFunction;
use LunaPress\Wp\AssetsContracts\IAssetDependency;
use LunaPress\FoundationContracts\Support\WpFunction\WpArray;

defined('ABSPATH') || exit;

interface IWpRegisterScriptFunction extends IExecutableFunction
{
    public function handle(string $handle): self;
    public function src(string|false $src): self;

    /**
     * @param IAssetDependency[] $deps
     * @return self
     */
    public function deps(array $deps): self;
    public function version(string|bool|null $version): self;
    public function args(IWpRegisterScriptArgs|WpArray|bool $args): self;

    public function getHandle(): string;
    public function getSrc(): string|false;

    /**
     * @return IAssetDependency[]
     */
    public function getDeps(): array;
    public function getVersion(): string|bool|null;
    public function getArgs(): IWpRegisterScriptArgs|WpArray|bool;

    public function executeWithArgs(array $args): bool;
}
