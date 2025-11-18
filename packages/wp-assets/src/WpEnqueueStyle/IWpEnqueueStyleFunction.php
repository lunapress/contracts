<?php
declare(strict_types=1);

namespace LunaPress\Wp\AssetsContracts\WpEnqueueStyle;

use LunaPress\CoreContracts\Support\IExecutableFunction;
use LunaPress\Wp\AssetsContracts\IAssetDependency;

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

    public function executeWithArgs(array $args): void;
}
