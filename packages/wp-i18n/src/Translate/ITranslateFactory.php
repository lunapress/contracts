<?php
declare(strict_types=1);

namespace LunaPress\Wp\I18nContracts\Translate;

use LunaPress\CoreContracts\Support\IFactory;

defined('ABSPATH') || exit;

interface ITranslateFactory extends IFactory
{
    public function make(string $text): ITranslateFunction;
}
