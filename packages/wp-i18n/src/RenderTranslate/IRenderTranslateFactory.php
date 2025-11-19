<?php
declare(strict_types=1);

namespace LunaPress\Wp\I18nContracts\RenderTranslate;

use LunaPress\Wp\I18nContracts\Support\ITranslationFactory;

defined('ABSPATH') || exit;

interface IRenderTranslateFactory extends ITranslationFactory
{
    public function make(string $text): IRenderTranslateFunction;
}
