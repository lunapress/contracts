<?php
declare(strict_types=1);

namespace LunaPress\Wp\AssetsContracts\WpEnqueueScript\Enum;

defined('ABSPATH') || exit;

enum WpEnqueueScriptStrategy: string
{
    case DEFER = 'defer';
    case ASYNC = 'async';
}
