<?php
declare(strict_types=1);

namespace LunaPress\Wp\I18nContracts\Support;

use LunaPress\CoreContracts\Support\IFactory;

defined('ABSPATH') || exit;

interface ITranslationFactory extends IFactory
{
    public function make(string $text): ITranslationFunction;
}
