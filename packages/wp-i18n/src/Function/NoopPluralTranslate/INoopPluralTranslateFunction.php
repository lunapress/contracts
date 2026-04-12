<?php
declare(strict_types=1);

namespace LunaPress\Wp\I18nContracts\Function\NoopPluralTranslate;

use LunaPress\Wp\I18nContracts\Entity\ITranslatorFunction;
use LunaPress\Wp\I18nContracts\Capability\IHasNoopPlural;

defined('ABSPATH') || exit;

interface INoopPluralTranslateFunction extends ITranslatorFunction, IHasNoopPlural
{
}
