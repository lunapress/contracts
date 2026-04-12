<?php
declare(strict_types=1);

namespace LunaPress\Wp\I18nContracts\Function\GetAvailableLanguages;

use LunaPress\FoundationContracts\Support\IExecutableFunction;

defined('ABSPATH') || exit;

interface IGetAvailableLanguagesFunction extends IExecutableFunction
{
    public function dir(?string $dir): static;

    public function getDir(): ?string;
}
