<?php

declare(strict_types=1);

namespace LunaPress\Wp\AssetsContracts\Enum;

enum FetchPriority: string
{
    case Auto = 'auto';
    case High = 'high';
    case Low = 'low';
}
