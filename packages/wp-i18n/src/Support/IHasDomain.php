<?php
declare(strict_types=1);

namespace LunaPress\Wp\I18nContracts\Support;

defined('ABSPATH') || exit;

interface IHasDomain
{
    public function domain(string $domain): static;
    public function getDomain(): string;
}
