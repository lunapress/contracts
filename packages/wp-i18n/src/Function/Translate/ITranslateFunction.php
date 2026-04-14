<?php
declare(strict_types=1);

namespace LunaPress\Wp\I18nContracts\Function\Translate;

use LunaPress\Wp\I18nContracts\Capability\IHasText;
use LunaPress\Wp\I18nContracts\Entity\ITranslatorFunction;

defined('ABSPATH') || exit;

interface ITranslateFunction extends ITranslatorFunction, IHasText
{
}
