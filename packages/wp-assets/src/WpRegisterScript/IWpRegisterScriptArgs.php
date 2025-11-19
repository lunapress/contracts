<?php
declare(strict_types=1);

namespace LunaPress\Wp\AssetsContracts\WpRegisterScript;

use LunaPress\FoundationContracts\Support\WpFunction\IWpFunctionArgs;

defined('ABSPATH') || exit;

interface IWpRegisterScriptArgs extends IWpFunctionArgs
{
    public function strategy(?string $strategy): self;

    public function inFooter(?bool $inFooter): self;

    public function getStrategy(): ?string;

    public function isInFooter(): ?bool;
}
