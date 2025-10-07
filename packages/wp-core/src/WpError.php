<?php
declare(strict_types=1);

namespace Lunapress\Wp\CoreContracts;

defined('ABSPATH') || exit;

interface WpError
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
