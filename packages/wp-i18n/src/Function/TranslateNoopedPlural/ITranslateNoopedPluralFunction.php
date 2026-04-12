<?php
declare(strict_types=1);

namespace LunaPress\Wp\I18nContracts\Function\TranslateNoopedPlural;

use LunaPress\FoundationContracts\Support\IExecutableFunction;
use LunaPress\Wp\I18nContracts\Entity\INoopedPlural;

defined('ABSPATH') || exit;

interface ITranslateNoopedPluralFunction extends IExecutableFunction
{
    public function noopedPlural(INoopedPlural $noopedPlural): static;
    public function number(int $number): static;
    public function domain(?string $domain): static;

    public function getNoopedPlural(): INoopedPlural;
    public function getNumber(): int;
    public function getDomain(): ?string;
}