<?php

declare(strict_types=1);

namespace LunaPress\Wp\AssetsContracts\Enum;

enum StyleMedia: string
{
    case ALL = 'all';
    case PRINT = 'print';
    case SCREEN = 'screen';
    case SPEECH = 'speech';
}
