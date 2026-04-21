<?php

declare(strict_types=1);

namespace LunaPress\Wp\I18nContracts\Function\EscAttrContextTranslate;

use LunaPress\Wp\I18nContracts\Capability\IHasContext;
use LunaPress\Wp\I18nContracts\Capability\IHasText;
use LunaPress\Wp\I18nContracts\Entity\ITranslatorFunction;



interface IEscAttrContextTranslateFunction extends ITranslatorFunction, IHasText, IHasContext
{
}
