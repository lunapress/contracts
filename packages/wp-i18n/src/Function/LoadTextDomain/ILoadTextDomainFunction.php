<?php

declare(strict_types=1);

namespace LunaPress\Wp\I18nContracts\Function\LoadTextDomain;

use LunaPress\Wp\I18nContracts\Entity\ITranslatorFunction;



interface ILoadTextDomainFunction extends ITranslatorFunction
{
    public function moFile(string $moFile): static;

    public function locale(?string $locale): static;

    public function getMoFile(): string;

    public function getLocale(): ?string;
}
