<?php

declare(strict_types=1);

namespace LunaPress\Wp\AssetsContracts\Enum;

enum StyleMedia: string
{
    case All = 'all';
    case Print = 'print';
    case Screen = 'screen';
    case Speech = 'speech';
}
