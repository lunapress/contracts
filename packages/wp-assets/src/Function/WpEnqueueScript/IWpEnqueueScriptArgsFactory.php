<?php

declare(strict_types=1);

namespace LunaPress\Wp\AssetsContracts\Function\WpEnqueueScript;

use LunaPress\FoundationContracts\Support\IFactory;
use LunaPress\Wp\AssetsContracts\Enum\ScriptStrategy;
use LunaPress\Wp\AssetsContracts\Function\WpEnqueueScript\IWpEnqueueScriptArgs;



interface IWpEnqueueScriptArgsFactory extends IFactory
{
    public function make(ScriptStrategy $strategy, bool $inFooter): IWpEnqueueScriptArgs;
}
