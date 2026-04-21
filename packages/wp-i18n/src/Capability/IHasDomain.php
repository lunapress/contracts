<?php

declare(strict_types=1);

namespace LunaPress\Wp\I18nContracts\Capability;

interface IHasDomain extends IDomain
{
    public function domain(string $domain): static;
}
