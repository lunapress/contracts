<?php

declare(strict_types=1);

namespace LunaPress\Wp\I18nContracts\Capability;

interface IOptionalDomain
{
    public function getDomain(): ?string;
}
