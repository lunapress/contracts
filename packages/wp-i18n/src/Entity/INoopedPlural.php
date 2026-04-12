<?php
declare(strict_types=1);

namespace LunaPress\Wp\I18nContracts\Entity;

defined('ABSPATH') || exit;

interface INoopedPlural
{
    public function getSingle(): string;
    public function getPlural(): string;

    public function getContext(): ?string;

    public function getDomain(): ?string;
}
