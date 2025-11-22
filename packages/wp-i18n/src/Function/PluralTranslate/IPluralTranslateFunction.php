<?php
declare(strict_types=1);

namespace LunaPress\Wp\I18nContracts\Function\PluralTranslate;

use LunaPress\Wp\I18nContracts\Entity\ITranslatorFunction;
use LunaPress\Wp\I18nContracts\Capability\IHasPlural;

defined('ABSPATH') || exit;

interface IPluralTranslateFunction extends IHasPlural, ITranslatorFunction
{
}
