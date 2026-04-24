<?php

declare(strict_types=1);

namespace LunaPress\FoundationContracts\Support\Wp;

use BackedEnum;

interface WpCaster
{
    /**
     * @param null|callable(WpArgument): mixed $argumentMapper
     */
    public function value(mixed $value, ?callable $argumentMapper = null): mixed;

    /**
     * @param array<mixed> $list
     * @param null|callable(WpArgument): mixed $argumentMapper
     * @return array<mixed>
     */
    public function list(array $list, ?callable $argumentMapper = null): array;

    public function asString(string|BackedEnum $value): string;
}
