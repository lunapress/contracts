<?php
declare(strict_types=1);

namespace LunaPress\Wp\I18nContracts\Support;

use LunaPress\FoundationContracts\Support\IExecutableFunction;

defined('ABSPATH') || exit;

interface ITranslatorFunction extends IExecutableFunction, IHasDomain
{
}
