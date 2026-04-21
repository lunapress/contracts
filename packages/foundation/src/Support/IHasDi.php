<?php

declare(strict_types=1);

namespace LunaPress\FoundationContracts\Support;

interface IHasDi
{
    public static function getDiPath(): ?string;
}
