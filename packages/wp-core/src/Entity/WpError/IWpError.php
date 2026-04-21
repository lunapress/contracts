<?php

declare(strict_types=1);

namespace LunaPress\Wp\CoreContracts\Entity\WpError;

interface IWpError
{
    public function getErrorCode(): string;

    /**
     * @return string[]
     */
    public function getErrorMessages(string $code = ''): array;

    public function getErrorMessage(string $code = ''): string;

    public function getErrorData(string $code = ''): mixed;
}
