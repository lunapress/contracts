<?php

declare(strict_types=1);

namespace LunaPress\Wp\AssetsContracts\DTO;

use LunaPress\FoundationContracts\Support\WpFunction\IWpArrayable;
use LunaPress\FoundationContracts\Support\WpFunction\WpUnset;
use LunaPress\Wp\AssetsContracts\Enum\FetchPriority;
use LunaPress\Wp\AssetsContracts\Enum\ScriptStrategy;

final readonly class WpRegisterScriptArgs implements IWpArrayable
{
    public function __construct(
        public WpUnset|ScriptStrategy $strategy = WpUnset::Value,
        public WpUnset|bool $inFooter = WpUnset::Value,
        public WpUnset|FetchPriority $fetchPriority = WpUnset::Value,
    ) {
    }

    /**
     * @return array<string, mixed>
     */
    public function toWpArray(): array
    {
        $args = [];

        if ($this->strategy !== WpUnset::Value) {
            $args['strategy'] = $this->strategy->value;
        }

        if ($this->inFooter !== WpUnset::Value) {
            $args['in_footer'] = $this->inFooter;
        }

        if ($this->fetchPriority !== WpUnset::Value) {
            $args['fetchpriority'] = $this->fetchPriority->value;
        }

        return $args;
    }
}
