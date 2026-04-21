<?php

declare(strict_types=1);

namespace LunaPress\Wp\AssetsContracts\Enum;

enum ScriptModuleImport: string
{
    case DYNAMIC = 'dynamic';
    case STATIC  = 'static';
}
