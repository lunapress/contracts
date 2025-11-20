<?php
declare(strict_types=1);

namespace LunaPress\Wp\AssetsContracts\WpEnqueueScript;

use LunaPress\FoundationContracts\Support\WpFunction\IWpFunctionArgs;
use LunaPress\FoundationContracts\Support\WpFunction\WpUnset;
use LunaPress\Wp\AssetsContracts\WpEnqueueScript\Enum\WpEnqueueScriptStrategy;

defined('ABSPATH') || exit;

interface IWpEnqueueScriptArgs extends IWpFunctionArgs
{
    public function strategy(WpEnqueueScriptStrategy|WpUnset $strategy): self;
    public function inFooter(bool|WpUnset $inFooter): self;

    public function getStrategy(): WpEnqueueScriptStrategy|WpUnset;
    public function getInFooter(): bool|WpUnset;
}
