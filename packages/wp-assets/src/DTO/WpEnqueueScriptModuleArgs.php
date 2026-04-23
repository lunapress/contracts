<?php

declare(strict_types=1);

namespace LunaPress\Wp\AssetsContracts\DTO;

use LunaPress\FoundationContracts\Support\WpFunction\IWpArrayable;
use LunaPress\FoundationContracts\Support\WpFunction\WpUnset;
use LunaPress\Wp\AssetsContracts\Enum\FetchPriority;

final readonly class WpEnqueueScriptModuleArgs implements IWpArrayable
{
    public function __construct(
        private WpUnset|bool $inFooter = WpUnset::Value,
        private WpUnset|FetchPriority $fetchPriority = WpUnset::Value,
    ) {
    }

    /**
     * @return array<string, mixed>
     */
    public function toWpArray(): array
    {
        $args = [];

        if ($this->inFooter !== WpUnset::Value) {
            $args['footer'] = $this->inFooter;
        }

        if ($this->fetchPriority !== WpUnset::Value) {
            $args['priority'] = $this->fetchPriority;
        }

        return $args;
    }
}
