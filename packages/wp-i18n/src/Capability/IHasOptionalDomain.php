<?php
declare(strict_types=1);

namespace LunaPress\Wp\I18nContracts\Capability;

defined('ABSPATH') || exit;

interface IHasOptionalDomain extends IOptionalDomain
{
    public function domain(?string $domain): static;
}
