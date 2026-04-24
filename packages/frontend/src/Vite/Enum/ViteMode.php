<?php

declare(strict_types=1);

namespace LunaPress\FrontendContracts\Vite\Enum;

enum ViteMode: string
{
    case DEV = 'development';
    case PROD = 'production';
}
