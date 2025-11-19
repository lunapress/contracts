<?php
declare(strict_types=1);

namespace LunaPress\Wp\I18nContracts\ContextPluralTranslate;

use LunaPress\FoundationContracts\Support\IExecutableFunction;
use LunaPress\Wp\I18nContracts\Support\IHasContext;
use LunaPress\Wp\I18nContracts\Support\IHasDomain;
use LunaPress\Wp\I18nContracts\Support\IHasPlural;

defined('ABSPATH') || exit;

interface IContextPluralTranslateFunction extends IExecutableFunction, IHasContext, IHasPlural, IHasDomain
{
}
