<?php
declare(strict_types=1);

namespace LunaPress\Wp\I18nContracts\Function\RenderContextTranslate;

use LunaPress\FoundationContracts\Support\IFactory;

defined('ABSPATH') || exit;

interface IRenderContextTranslateFactory extends IFactory
{
    public function make(string $text, string $context): IRenderContextTranslateFunction;
}
