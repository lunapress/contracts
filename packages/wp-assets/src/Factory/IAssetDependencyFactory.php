<?php

declare(strict_types=1);

namespace LunaPress\Wp\AssetsContracts\Factory;

use LunaPress\FoundationContracts\Support\IFactory;
use LunaPress\Wp\AssetsContracts\Entity\IAssetDependency;



interface IAssetDependencyFactory extends IFactory
{
    public function make(string $handle): IAssetDependency;
}
