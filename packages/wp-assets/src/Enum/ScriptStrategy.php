<?php

declare(strict_types=1);

namespace LunaPress\Wp\AssetsContracts\Enum;

enum ScriptStrategy: string
{
    case Defer = 'defer';
    case Async = 'async';
}
