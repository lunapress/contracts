<?php
declare(strict_types=1);

namespace LunaPress\FoundationContracts\PackageMeta;

defined('ABSPATH') || exit;

enum PackageType: string
{
    case SERVICE = 'lunapress-service-package';
}
