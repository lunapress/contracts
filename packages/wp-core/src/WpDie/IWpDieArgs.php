<?php
declare(strict_types=1);

namespace LunaPress\Wp\CoreContracts\WpDie;

use LunaPress\CoreContracts\Support\WpFunction\IWpFunctionArgs;

defined('ABSPATH') || exit;

interface IWpDieArgs extends IWpFunctionArgs
{
    public function response(?int $response): self;

    public function linkUrl(?string $url): self;

    public function linkText(?string $text): self;

    public function backLink(?bool $enabled): self;

    public function textDirection(?string $direction): self;

    public function charset(?string $charset): self;

    public function code(?string $code): self;

    public function exit(?bool $exit): self;
}
