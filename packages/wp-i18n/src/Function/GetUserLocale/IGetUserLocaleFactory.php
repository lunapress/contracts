<?php
declare(strict_types=1);

namespace LunaPress\Wp\I18nContracts\Function\GetUserLocale;

use LunaPress\FoundationContracts\Support\IFactory;

defined('ABSPATH') || exit;

interface IGetUserLocaleFactory extends IFactory
{
    public function make(int $userId = 0): IGetUserLocaleFunction;
}
