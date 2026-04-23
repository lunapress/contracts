<?php

declare(strict_types=1);

namespace LunaPress\FoundationContracts\Support\WpFunction;

/**
 * Marker for strictly typed empty DTO arguments in function signatures.
 *
 * Prevents memory allocation for empty DTO instances while avoiding raw 'array'
 * type hints. Handled by WpCaster to return an empty array `[]` for WP core.
 */
enum WpArray
{
    case Empty;
}
