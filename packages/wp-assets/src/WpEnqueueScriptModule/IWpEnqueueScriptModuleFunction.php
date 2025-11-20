<?php
declare(strict_types=1);

namespace LunaPress\Wp\AssetsContracts\WpEnqueueScriptModule;

use LunaPress\FoundationContracts\Support\IExecutableFunction;
use LunaPress\FoundationContracts\Support\WpFunction\WpArray;

defined('ABSPATH') || exit;

interface IWpEnqueueScriptModuleFunction extends IExecutableFunction
{
    public function id(string $id): self;

    public function src(string $src): self;

    /**
     * @param IWpEnqueueScriptModuleDep[] $deps
     * @return self
     */
    public function deps(array $deps): self;

    public function version(string|false|null $version): self;

    public function getId(): string;
    public function getSrc(): string;

    /**
     * @return IWpEnqueueScriptModuleDep[]
     */
    public function getDeps(): array;
    public function getVersion(): string|false|null;

    public function executeWithArgs(array $args): void;
}
