<?php
declare(strict_types=1);

namespace LunaPress\Wp\I18nContracts\Support;

defined('ABSPATH') || exit;

interface IHasText
{
    public function text(string $text): self;
    public function getText(): string;
}
