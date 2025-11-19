<?php
declare(strict_types=1);

namespace LunaPress\Wp\I18nContracts\Translate;

use LunaPress\CoreContracts\Support\IExecutableFunction;
use LunaPress\Wp\I18nContracts\Support\IHasDomain;
use LunaPress\Wp\I18nContracts\Support\IHasText;

defined('ABSPATH') || exit;
interface ITranslateFunction extends IExecutableFunction, IHasText, IHasDomain
{
}
