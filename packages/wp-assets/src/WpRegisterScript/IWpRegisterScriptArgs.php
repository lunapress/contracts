<?php
declare(strict_types=1);

namespace LunaPress\Wp\AssetsContracts\WpRegisterScript;

use LunaPress\CoreContracts\Support\WpFunction\WpFunctionArgs;

defined('ABSPATH') || exit;

interface IWpRegisterScriptArgs extends WpFunctionArgs
{
    public function strategy(?string $strategy): self;

    public function inFooter(?bool $inFooter): self;

    public function getStrategy(): ?string;

    public function isInFooter(): ?bool;
}
