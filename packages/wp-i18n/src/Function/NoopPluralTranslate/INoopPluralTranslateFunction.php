<?php

declare(strict_types=1);

namespace LunaPress\Wp\I18nContracts\Function\NoopPluralTranslate;

use LunaPress\FoundationContracts\Support\IExecutableFunction;
use LunaPress\Wp\I18nContracts\Capability\IHasNoopPlural;
use LunaPress\Wp\I18nContracts\Capability\IHasOptionalDomain;



interface INoopPluralTranslateFunction extends IExecutableFunction, IHasOptionalDomain, IHasNoopPlural
{
}
