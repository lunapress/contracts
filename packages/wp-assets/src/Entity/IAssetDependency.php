<?php

declare(strict_types=1);

namespace LunaPress\Wp\AssetsContracts\Entity;

use Stringable;



interface IAssetDependency extends Stringable
{
    public function handle(string $handle): self;
    public function getHandle(): string;
}
