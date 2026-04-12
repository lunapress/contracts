<?php
declare(strict_types=1);

namespace LunaPress\Wp\I18nContracts\Function\GetAvailableLanguages;

use LunaPress\FoundationContracts\Support\IFactory;

defined('ABSPATH') || exit;

interface IGetAvailableLanguagesFactory extends IFactory
{
    public function make(?string $dir = null): IGetAvailableLanguagesFunction;
}
