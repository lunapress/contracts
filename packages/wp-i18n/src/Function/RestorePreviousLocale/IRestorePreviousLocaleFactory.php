<?php
declare(strict_types=1);

namespace LunaPress\Wp\I18nContracts\Function\RestorePreviousLocale;

use LunaPress\FoundationContracts\Support\IFactory;

defined('ABSPATH') || exit;

interface IRestorePreviousLocaleFactory extends IFactory
{
    public function make(): IRestorePreviousLocaleFunction;
}
