<?php
declare(strict_types=1);

namespace LunaPress\Wp\I18nContracts\PluralTranslate;

use LunaPress\Wp\I18nContracts\Support\ITranslatorFunction;
use LunaPress\Wp\I18nContracts\Support\IHasPlural;

defined('ABSPATH') || exit;

interface IPluralTranslateFunction extends IHasPlural, ITranslatorFunction
{
}
