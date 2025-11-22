<?php
declare(strict_types=1);

namespace LunaPress\Wp\I18nContracts\Capability;

defined('ABSPATH') || exit;

interface IHasContext
{
    public function context(string $context): static;
    public function getContext(): string;
}
