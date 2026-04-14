<?php
declare(strict_types=1);

namespace LunaPress\Wp\I18nContracts\Function\TranslateNoopedPlural;

use LunaPress\FoundationContracts\Support\IFactory;
use LunaPress\Wp\I18nContracts\Entity\INoopedPlural;

defined('ABSPATH') || exit;

interface ITranslateNoopedPluralFactory extends IFactory
{
    public function make(INoopedPlural $noopedPlural, int $count): ITranslateNoopedPluralFunction;
}
