<?php

declare(strict_types=1);

namespace LunaPress\Wp\I18nContracts\Function\ContextNoopPluralTranslate;

use LunaPress\FoundationContracts\Support\IExecutableFunction;
use LunaPress\Wp\I18nContracts\Capability\IHasContext;
use LunaPress\Wp\I18nContracts\Capability\IHasNoopPlural;
use LunaPress\Wp\I18nContracts\Capability\IHasOptionalDomain;



interface IContextNoopPluralTranslateFunction extends IExecutableFunction, IHasOptionalDomain, IHasNoopPlural, IHasContext
{
}
