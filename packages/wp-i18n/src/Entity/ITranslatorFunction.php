<?php

declare(strict_types=1);

namespace LunaPress\Wp\I18nContracts\Entity;

use LunaPress\FoundationContracts\Support\IExecutableFunction;
use LunaPress\Wp\I18nContracts\Capability\IHasDomain;



interface ITranslatorFunction extends IExecutableFunction, IHasDomain
{
}
