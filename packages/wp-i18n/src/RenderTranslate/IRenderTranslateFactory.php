<?php
declare(strict_types=1);

namespace LunaPress\Wp\I18nContracts\RenderTranslate;

use LunaPress\FoundationContracts\Support\IFactory;

defined('ABSPATH') || exit;

interface IRenderTranslateFactory extends IFactory
{
    public function make(string $text): IRenderTranslateFunction;
}
