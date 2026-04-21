<?php

declare(strict_types=1);

namespace LunaPress\Wp\I18nContracts\Function\GetUserLocale;

use LunaPress\FoundationContracts\Support\IExecutableFunction;



interface IGetUserLocaleFunction extends IExecutableFunction
{
    public function userId(int $userId): static;

    public function getUserId(): int;
}
