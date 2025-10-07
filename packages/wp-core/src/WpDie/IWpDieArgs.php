<?php
declare(strict_types=1);

namespace Lunapress\Wp\CoreContracts\WpDie;

use Lunapress\CoreContracts\Support\WpFunction\WpFunctionArgs;

defined('ABSPATH') || exit;

interface IWpDieArgs extends WpFunctionArgs
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
