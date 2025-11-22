<?php
declare(strict_types=1);

namespace LunaPress\Wp\AssetsContracts\Function\WpEnqueueScript;

use LunaPress\FoundationContracts\Support\WpFunction\IWpFunctionArgs;
use LunaPress\FoundationContracts\Support\WpFunction\WpUnset;
use LunaPress\Wp\AssetsContracts\Enum\ScriptStrategy;

defined('ABSPATH') || exit;

interface IWpEnqueueScriptArgs extends IWpFunctionArgs
{
    public function strategy(ScriptStrategy|WpUnset $strategy): self;
    public function inFooter(bool|WpUnset $inFooter): self;

    public function getStrategy(): ScriptStrategy|WpUnset;
    public function getInFooter(): bool|WpUnset;
}
