<?php
declare(strict_types=1);

namespace LunaPress\Wp\AssetsContracts\Function\WpRegisterScript;

use LunaPress\FoundationContracts\Support\WpFunction\IWpFunctionArgs;
use LunaPress\FoundationContracts\Support\WpFunction\WpUnset;
use LunaPress\Wp\AssetsContracts\Enum\ScriptStrategy;

defined('ABSPATH') || exit;

interface IWpRegisterScriptArgs extends IWpFunctionArgs
{
    public function strategy(ScriptStrategy|WpUnset $strategy): self;
    public function inFooter(bool|WpUnset $inFooter): self;

    public function getStrategy(): ScriptStrategy|WpUnset;
    public function isInFooter(): bool|WpUnset;
}
