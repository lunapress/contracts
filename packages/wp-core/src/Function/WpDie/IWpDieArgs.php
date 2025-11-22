<?php
declare(strict_types=1);

namespace LunaPress\Wp\CoreContracts\Function\WpDie;

use LunaPress\FoundationContracts\Support\WpFunction\IWpFunctionArgs;
use LunaPress\FoundationContracts\Support\WpFunction\WpUnset;

defined('ABSPATH') || exit;

interface IWpDieArgs extends IWpFunctionArgs
{
    public function response(int|WpUnset $response): self;
    public function linkUrl(string|WpUnset $url): self;
    public function linkText(string|WpUnset $text): self;
    public function backLink(bool|WpUnset $enabled): self;
    public function textDirection(string|WpUnset $direction): self;
    public function charset(string|WpUnset $charset): self;
    public function code(string|WpUnset $code): self;
    public function exit(bool|WpUnset $exit): self;

    public function getResponse(): int|WpUnset;
    public function getLinkUrl(): string|WpUnset;
    public function getLinkText(): string|WpUnset;
    public function getBackLink(): bool|WpUnset;
    public function getTextDirection(): string|WpUnset;
    public function getCharset(): string|WpUnset;
    public function getCode(): string|WpUnset;
    public function getExit(): bool|WpUnset;
}
