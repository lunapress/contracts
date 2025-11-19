<?php
declare(strict_types=1);

namespace LunaPress\Wp\I18nContracts\Support;

use LunaPress\CoreContracts\Support\IExecutableFunction;

defined('ABSPATH') || exit;

interface ITranslationFunction extends IExecutableFunction
{
    public function text(string $text): self;
    public function domain(?string $domain): self;

    public function getText(): string;
    public function getDomain(): ?string;
}
