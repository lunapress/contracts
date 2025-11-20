<?php
declare(strict_types=1);

namespace LunaPress\Wp\I18nContracts\Translator;

use LunaPress\Wp\I18nContracts\Support\ITranslatorFunction;

defined('ABSPATH') || exit;

interface ITranslator
{
    public function run(ITranslatorFunction $function);
}
