<?php
declare(strict_types=1);

namespace LunaPress\Wp\AssetsContracts\Enum;

defined('ABSPATH') || exit;

enum ScriptStrategy: string
{
    case DEFER = 'defer';
    case ASYNC = 'async';
}
