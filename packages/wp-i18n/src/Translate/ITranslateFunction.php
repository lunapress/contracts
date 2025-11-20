<?php
declare(strict_types=1);

namespace LunaPress\Wp\I18nContracts\Translate;

use LunaPress\FoundationContracts\Support\IExecutableFunction;
use LunaPress\Wp\I18nContracts\Support\IHasDomain;
use LunaPress\Wp\I18nContracts\Support\IHasText;
use LunaPress\Wp\I18nContracts\Support\ITranslatorFunction;

defined('ABSPATH') || exit;

interface ITranslateFunction extends ITranslatorFunction, IHasText
{
}
