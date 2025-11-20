<?php
declare(strict_types=1);

namespace LunaPress\Wp\AssetsContracts\WpRegisterScript\Enum;

defined('ABSPATH') || exit;

enum WpRegisterScriptStrategy: string
{
    case DEFER = 'defer';
    case ASYNC = 'async';
}
