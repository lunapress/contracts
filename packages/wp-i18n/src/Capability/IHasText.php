<?php

declare(strict_types=1);

namespace LunaPress\Wp\I18nContracts\Capability;

interface IHasText
{
    public function text(string $text): static;
    public function getText(): string;
}
