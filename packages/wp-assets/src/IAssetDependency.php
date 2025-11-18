<?php
declare(strict_types=1);

namespace LunaPress\Wp\AssetsContracts;

defined('ABSPATH') || exit;

interface IAssetDependency
{
    public function handle(string $handle): self;
    public function getHandle(): string;
}
