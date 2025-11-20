<?php
declare(strict_types=1);

namespace LunaPress\Wp\AssetsContracts\WpEnqueueStyle;

use LunaPress\FoundationContracts\Support\IExecutableFunction;
use LunaPress\Wp\AssetsContracts\IAssetDependency;
use LunaPress\FoundationContracts\Support\WpFunction\WpArray;

defined('ABSPATH') || exit;

interface IWpEnqueueStyleFunction extends IExecutableFunction
{
    public function handle(string $handle): self;

    public function src(string $src): self;

    /**
     * @param IAssetDependency[] $deps
     * @return self
     */
    public function deps(array $deps): self;

    public function version(string|bool|null $version): self;

    public function media(string $media): self;

    public function getHandle(): string;
    public function getSrc(): string;

    /**
     * @return IAssetDependency[]
     */
    public function getDeps(): array;
    public function getVersion(): string|bool|null;
    public function getMedia(): string;

    public function executeWithArgs(array $args): void;
}
