<?php
declare(strict_types=1);

namespace LunaPress\Wp\I18nContracts\Capability;

defined('ABSPATH') || exit;

interface IOptionalDomain
{
    public function getDomain(): ?string;
}
