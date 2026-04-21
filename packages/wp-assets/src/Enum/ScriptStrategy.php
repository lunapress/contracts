<?php

declare(strict_types=1);

namespace LunaPress\Wp\AssetsContracts\Enum;

enum ScriptStrategy: string
{
    case DEFER = 'defer';
    case ASYNC = 'async';
}
