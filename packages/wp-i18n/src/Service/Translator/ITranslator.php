<?php
declare(strict_types=1);

namespace LunaPress\Wp\I18nContracts\Service\Translator;

use LunaPress\Wp\I18nContracts\Entity\ITranslatorFunction;

defined('ABSPATH') || exit;

interface ITranslator
{
    public function run(ITranslatorFunction $function);
}
