<?php
declare(strict_types=1);

namespace LunaPress\Wp\I18nContracts\Capability;

defined('ABSPATH') || exit;

interface IHasNoopPlural
{
    public function single(string $single): static;
    public function plural(string $plural): static;

    public function getSingle(): string;
    public function getPlural(): string;
}