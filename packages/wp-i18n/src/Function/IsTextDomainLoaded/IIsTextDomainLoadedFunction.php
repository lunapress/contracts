<?php
declare(strict_types=1);

namespace LunaPress\Wp\I18nContracts\Function\IsTextDomainLoaded;

use LunaPress\FoundationContracts\Support\IExecutableFunction;
use LunaPress\Wp\I18nContracts\Capability\IHasDomain;

defined('ABSPATH') || exit;

interface IIsTextDomainLoadedFunction extends IExecutableFunction, IHasDomain
{
}
