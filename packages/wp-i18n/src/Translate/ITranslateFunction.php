<?php
declare(strict_types=1);

namespace LunaPress\Wp\I18nContracts\Translate;

defined('ABSPATH') || exit;

interface ITranslateFunction
{
    public function text(string $text): self;
    public function domain(?string $domain): self;

    public function getText(): string;
    public function getDomain(): ?string;
}
