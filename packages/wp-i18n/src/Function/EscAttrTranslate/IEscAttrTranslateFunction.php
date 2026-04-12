<?php
declare(strict_types=1);

namespace LunaPress\Wp\I18nContracts\Function\EscAttrTranslate;

use LunaPress\Wp\I18nContracts\Capability\IHasText;
use LunaPress\Wp\I18nContracts\Entity\ITranslatorFunction;

defined('ABSPATH') || exit;

interface IEscAttrTranslateFunction extends ITranslatorFunction, IHasText
{
}
