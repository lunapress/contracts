<?php
declare(strict_types=1);

namespace LunaPress\Wp\I18nContracts\Support;

defined('ABSPATH') || exit;

interface IHasContext
{
    public function context(string $context): static;
    public function getContext(): string;
}
