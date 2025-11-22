<?php
declare(strict_types=1);

namespace LunaPress\Wp\I18nContracts\Function\RenderTranslate;

use LunaPress\FoundationContracts\Support\IFactory;
use LunaPress\Wp\I18nContracts\Function\RenderTranslate\IRenderTranslateFunction;

defined('ABSPATH') || exit;

interface IRenderTranslateFactory extends IFactory
{
    public function make(string $text): IRenderTranslateFunction;
}
