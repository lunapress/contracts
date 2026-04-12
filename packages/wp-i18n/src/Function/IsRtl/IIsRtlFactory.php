<?php
declare(strict_types=1);

namespace LunaPress\Wp\I18nContracts\Function\IsRtl;

use LunaPress\FoundationContracts\Support\IFactory;

defined('ABSPATH') || exit;

interface IIsRtlFactory extends IFactory
{
    public function make(): IIsRtlFunction;
}
