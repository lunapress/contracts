<?php
declare(strict_types=1);

namespace LunaPress\Wp\I18nContracts\ContextTranslate;

use LunaPress\FoundationContracts\Support\IFactory;

defined('ABSPATH') || exit;

interface IContextTranslateFactory extends IFactory
{
    public function make(string $text, string $context): IContextTranslateFunction;
}
