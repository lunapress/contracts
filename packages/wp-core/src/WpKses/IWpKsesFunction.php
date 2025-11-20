<?php
declare(strict_types=1);

namespace LunaPress\Wp\CoreContracts\WpKses;

use LunaPress\FoundationContracts\Support\IExecutableFunction;
use LunaPress\FoundationContracts\Support\WpFunction\WpArray;

defined('ABSPATH') || exit;

interface IWpKsesFunction extends IExecutableFunction
{
    public function content(string $content): self;

    public function allowedHtml(array|string $allowedHtml): self;

    public function allowedProtocols(array $allowedProtocols): self;

    public function getContent(): string;
    public function getAllowedHtml(): array|string;
    public function getAllowedProtocols(): array;

    public function executeWithArgs(array $args): string;
}
