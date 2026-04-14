<?php
declare(strict_types=1);

namespace LunaPress\Wp\I18nContracts\Function\TranslateNoopedPlural;

use LunaPress\FoundationContracts\Support\IExecutableFunction;
use LunaPress\Wp\I18nContracts\Capability\IHasDomain;
use LunaPress\Wp\I18nContracts\Entity\INoopedPlural;

defined('ABSPATH') || exit;

interface ITranslateNoopedPluralFunction extends IExecutableFunction, IHasDomain
{
    public function noopedPlural(INoopedPlural $noopedPlural): static;
    public function count(int $count): static;

    public function getNoopedPlural(): INoopedPlural;
    public function getCount(): int;
}
