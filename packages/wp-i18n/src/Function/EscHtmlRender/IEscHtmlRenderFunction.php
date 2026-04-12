<?php
declare(strict_types=1);

namespace LunaPress\Wp\I18nContracts\Function\EscHtmlRender;

use LunaPress\Wp\I18nContracts\Capability\IHasText;
use LunaPress\Wp\I18nContracts\Entity\ITranslatorFunction;

defined('ABSPATH') || exit;

interface IEscHtmlRenderFunction extends ITranslatorFunction, IHasText
{
}
