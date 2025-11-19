<?php
declare(strict_types=1);

namespace LunaPress\Wp\AssetsContracts\WpEnqueueScript;

use LunaPress\FoundationContracts\Support\IFactory;
use LunaPress\Wp\AssetsContracts\WpEnqueueScript\Enum\WpEnqueueScriptStrategy;

defined('ABSPATH') || exit;

interface IWpEnqueueScriptArgsFactory extends IFactory
{
    public function make(WpEnqueueScriptStrategy $strategy, bool $inFooter): IWpEnqueueScriptArgs;
}
