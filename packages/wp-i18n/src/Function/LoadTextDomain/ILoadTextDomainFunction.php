<?php
declare(strict_types=1);

namespace LunaPress\Wp\I18nContracts\Function\LoadTextDomain;

use LunaPress\FoundationContracts\Support\IExecutableFunction;
use LunaPress\Wp\I18nContracts\Capability\IHasDomain;

defined('ABSPATH') || exit;

interface ILoadTextDomainFunction extends IExecutableFunction, IHasDomain
{
    public function moFile(string $moFile): static;

    public function locale(?string $locale): static;

    public function getMoFile(): string;

    public function getLocale(): ?string;
}
