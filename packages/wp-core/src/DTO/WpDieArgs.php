<?php

declare(strict_types=1);

namespace LunaPress\Wp\CoreContracts\DTO;

use LunaPress\FoundationContracts\Support\WpFunction\IWpArrayable;
use LunaPress\FoundationContracts\Support\WpFunction\WpUnset;

final readonly class WpDieArgs implements IWpArrayable
{
    public function __construct(
        private WpUnset|int $response = WpUnset::Value,
        private WpUnset|string $linkUrl = WpUnset::Value,
        private WpUnset|string $linkText = WpUnset::Value,
        private WpUnset|bool $backLink = WpUnset::Value,
        private WpUnset|string $textDirection = WpUnset::Value,
        private WpUnset|string $charset = WpUnset::Value,
        private WpUnset|string $code = WpUnset::Value,
        private WpUnset|bool $exit = WpUnset::Value
    )
    {
    }

    /**
     * @return array<string, mixed>
     */
    public function toWpArray(): array
    {
        $args = [];

        if ($this->response !== WpUnset::Value) {
            $args['response'] = $this->response;
        }

        if ($this->linkUrl !== WpUnset::Value) {
            $args['link_url'] = $this->linkUrl;
        }

        if ($this->linkText !== WpUnset::Value) {
            $args['link_text'] = $this->linkText;
        }

        if ($this->backLink !== WpUnset::Value) {
            $args['back_link'] = $this->backLink;
        }

        if ($this->textDirection !== WpUnset::Value) {
            $args['text_direction'] = $this->textDirection;
        }

        if ($this->charset !== WpUnset::Value) {
            $args['charset'] = $this->charset;
        }

        if ($this->code !== WpUnset::Value) {
            $args['code'] = $this->code;
        }

        if ($this->exit !== WpUnset::Value) {
            $args['exit'] = $this->exit;
        }

        return $args;
    }
}
