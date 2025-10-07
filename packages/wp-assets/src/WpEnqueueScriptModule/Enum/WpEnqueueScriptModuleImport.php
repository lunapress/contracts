<?php
declare(strict_types=1);

namespace LunaPress\Wp\AssetsContracts\WpEnqueueScriptModule\Enum;

defined('ABSPATH') || exit;

enum WpEnqueueScriptModuleImport: string
{
    case DYNAMIC = 'dynamic';
    case STATIC  = 'static';
}
