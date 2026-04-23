<?php

declare(strict_types=1);

namespace LunaPress\FoundationContracts\Support\WpFunction;

/**
 * Marker for explicitly unpassed arguments (Undefined state).
 *
 * Use cases:
 * 1. DTO Optimization: Prevents unnecessary memory allocation for empty DTO instances.
 * Allows the wrapper to safely fall back to native WP defaults (e.g., `[]`).
 * 2. func_num_args() Safety: Protects core functions that verify the exact number
 * of passed arguments. Physically passing a native default value to such functions
 * can unexpectedly alter WP core behavior (e.g., `update_option()`).
 */
enum WpUnset
{
    case Value;
}
