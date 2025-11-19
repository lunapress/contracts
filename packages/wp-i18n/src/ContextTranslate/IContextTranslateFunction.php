<?php
declare(strict_types=1);

namespace LunaPress\Wp\I18nContracts\ContextTranslate;

use LunaPress\CoreContracts\Support\IExecutableFunction;
use LunaPress\Wp\I18nContracts\Support\IHasContext;
use LunaPress\Wp\I18nContracts\Support\IHasDomain;
use LunaPress\Wp\I18nContracts\Support\IHasText;

defined('ABSPATH') || exit;

interface IContextTranslateFunction extends IExecutableFunction, IHasContext, IHasDomain, IHasText
{
}
