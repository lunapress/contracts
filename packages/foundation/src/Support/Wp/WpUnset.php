<?php

declare(strict_types=1);

namespace LunaPress\FoundationContracts\Support\Wp;

/**
 * Marker for unpassed (undefined) DTO properties.
 *
 * Used exclusively inside DTOs to differentiate between explicitly passed 'null'
 * and an unpassed argument, preventing undefined keys in the mapped WP array.
 */
enum WpUnset
{
    case Value;
}
