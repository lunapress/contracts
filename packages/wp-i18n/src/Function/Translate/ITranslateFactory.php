<?php
declare(strict_types=1);

namespace LunaPress\Wp\I18nContracts\Function\Translate;

use LunaPress\FoundationContracts\Support\IFactory;
use LunaPress\Wp\I18nContracts\Function\Translate\ITranslateFunction;

defined('ABSPATH') || exit;

interface ITranslateFactory extends IFactory
{
    public function make(string $text): ITranslateFunction;
}
