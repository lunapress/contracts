<?php
declare(strict_types=1);

namespace LunaPress\Wp\I18nContracts\Capability;

use LunaPress\Wp\I18nContracts\Capability\IDomain;

defined('ABSPATH') || exit;

interface IHasDomain extends IDomain
{
    public function domain(string $domain): static;
}
