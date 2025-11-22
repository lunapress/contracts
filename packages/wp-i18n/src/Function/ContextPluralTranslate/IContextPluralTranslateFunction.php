<?php
declare(strict_types=1);

namespace LunaPress\Wp\I18nContracts\Function\ContextPluralTranslate;

use LunaPress\Wp\I18nContracts\Capability\IHasContext;
use LunaPress\Wp\I18nContracts\Entity\ITranslatorFunction;
use LunaPress\Wp\I18nContracts\Capability\IHasPlural;

defined('ABSPATH') || exit;

interface IContextPluralTranslateFunction extends IHasContext, IHasPlural, ITranslatorFunction
{
}
