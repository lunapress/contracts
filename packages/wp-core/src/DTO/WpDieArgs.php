<?php

declare(strict_types=1);

namespace LunaPress\Wp\CoreContracts\DTO;

use LunaPress\FoundationContracts\Support\Wp\WpArgument;
use LunaPress\FoundationContracts\Support\Wp\WpUnset;

final readonly class WpDieArgs implements WpArgument
{
    public function __construct(
        public WpUnset|int $response = WpUnset::Value,
        public WpUnset|string $linkUrl = WpUnset::Value,
        public WpUnset|string $linkText = WpUnset::Value,
        public WpUnset|bool $backLink = WpUnset::Value,
        public WpUnset|string $textDirection = WpUnset::Value,
        public WpUnset|string $charset = WpUnset::Value,
        public WpUnset|string $code = WpUnset::Value,
        public WpUnset|bool $exit = WpUnset::Value
    ) {
    }
}
