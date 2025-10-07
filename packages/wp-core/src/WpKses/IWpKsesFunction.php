<?php
declare(strict_types=1);

namespace Lunapress\Wp\CoreContracts\WpKses;

use Lunapress\CoreContracts\Support\ExecutableFunction;

defined('ABSPATH') || exit;

interface IWpKsesFunction extends ExecutableFunction
{
    public function content(string $content): self;

    public function allowedHtml(array|string $allowedHtml): self;

    public function allowedProtocols(array $allowedProtocols): self;

    public function executeWithArgs(array $args): string;
}
