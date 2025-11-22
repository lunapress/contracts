<?php
declare(strict_types=1);

namespace LunaPress\Wp\I18nContracts\Function\ContextTranslate;

use LunaPress\Wp\I18nContracts\Capability\IHasContext;
use LunaPress\Wp\I18nContracts\Capability\IHasText;

defined('ABSPATH') || exit;

interface IContextTranslateFunction extends IHasContext, IHasText
{
}
