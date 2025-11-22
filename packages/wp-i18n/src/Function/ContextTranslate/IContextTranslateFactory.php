<?php
declare(strict_types=1);

namespace LunaPress\Wp\I18nContracts\Function\ContextTranslate;

use LunaPress\FoundationContracts\Support\IFactory;
use LunaPress\Wp\I18nContracts\Function\ContextTranslate\IContextTranslateFunction;

defined('ABSPATH') || exit;

interface IContextTranslateFactory extends IFactory
{
    public function make(string $text, string $context): IContextTranslateFunction;
}
