<?php
declare(strict_types=1);

namespace LunaPress\Wp\I18nContracts\Support;

defined('ABSPATH') || exit;

interface IHasPlural
{
    public function single(string $single): static;
    public function plural(string $plural): static;
    public function number(int $number): static;

    public function getSingle(): string;
    public function getPlural(): string;
    public function getNumber(): int;
}
