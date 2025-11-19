<?php
declare(strict_types=1);

namespace LunaPress\Wp\I18nContracts\Translate;

use LunaPress\Wp\I18nContracts\Support\ITranslationFactory;

defined('ABSPATH') || exit;

interface ITranslateFactory extends ITranslationFactory
{
    public function make(string $text): ITranslateFunction;
}
