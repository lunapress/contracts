<?php
declare(strict_types=1);

namespace LunaPress\Wp\AssetsContracts;

use Stringable;

defined('ABSPATH') || exit;

interface IAssetDependency extends Stringable
{
    public function handle(string $handle): self;
    public function getHandle(): string;
}
