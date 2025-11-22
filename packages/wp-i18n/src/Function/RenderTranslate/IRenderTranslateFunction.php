<?php
declare(strict_types=1);

namespace LunaPress\Wp\I18nContracts\Function\RenderTranslate;

use LunaPress\FoundationContracts\Support\IExecutableFunction;
use LunaPress\Wp\I18nContracts\Capability\IHasDomain;
use LunaPress\Wp\I18nContracts\Capability\IHasText;
use LunaPress\Wp\I18nContracts\Entity\ITranslatorFunction;

defined('ABSPATH') || exit;

interface IRenderTranslateFunction extends ITranslatorFunction, IHasText
{
}