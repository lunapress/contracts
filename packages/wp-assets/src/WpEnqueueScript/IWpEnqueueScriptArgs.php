<?php
declare(strict_types=1);

namespace LunaPress\Wp\AssetsContracts\WpEnqueueScript;

use LunaPress\CoreContracts\Support\WpFunction\IWpFunctionArgs;
use LunaPress\Wp\AssetsContracts\WpEnqueueScript\Enum\WpEnqueueScriptStrategy;

defined('ABSPATH') || exit;

interface IWpEnqueueScriptArgs extends IWpFunctionArgs
{
    public function strategy(WpEnqueueScriptStrategy $strategy): self;
    public function inFooter(bool $inFooter): self;

    public function getStrategy(): WpEnqueueScriptStrategy;
    public function getInFooter(): bool;
}
