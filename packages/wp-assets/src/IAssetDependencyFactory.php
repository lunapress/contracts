<?php
declare(strict_types=1);

namespace LunaPress\Wp\AssetsContracts;

use LunaPress\FoundationContracts\Support\IFactory;

defined('ABSPATH') || exit;

interface IAssetDependencyFactory extends IFactory
{
    public function make(string $handle): IAssetDependency;
}
