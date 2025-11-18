<?php
declare(strict_types=1);

namespace LunaPress\Wp\CoreContracts;

defined('ABSPATH') || exit;

interface IWpError
{
    public function getErrorCode(): string;

    /**
     * @param string $code
     * @return string[]
     */
    public function getErrorMessages(string $code = ''): array;

    public function getErrorMessage(string $code = ''): string;

    public function getErrorData(string $code = ''): mixed;
}
