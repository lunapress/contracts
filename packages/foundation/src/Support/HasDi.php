<?php

declare(strict_types=1);

namespace LunaPress\FoundationContracts\Support;

interface HasDi
{
    public static function getDiPath(): ?string;
}
