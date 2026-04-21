<?php

declare(strict_types=1);

namespace LunaPress\Wp\I18nContracts\Function\RenderTranslate;

use LunaPress\Wp\I18nContracts\Capability\IHasText;
use LunaPress\Wp\I18nContracts\Entity\ITranslatorFunction;



interface IRenderTranslateFunction extends ITranslatorFunction, IHasText
{
}
