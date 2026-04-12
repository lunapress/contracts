<?php
declare(strict_types=1);

namespace LunaPress\Wp\I18nContracts\Function\ContextNoopPluralTranslate;

use LunaPress\Wp\I18nContracts\Entity\ITranslatorFunction;
use LunaPress\Wp\I18nContracts\Capability\IHasNoopPlural;
use LunaPress\Wp\I18nContracts\Capability\IHasContext;

defined('ABSPATH') || exit;

interface IContextNoopPluralTranslateFunction extends ITranslatorFunction, IHasNoopPlural, IHasContext
{
}