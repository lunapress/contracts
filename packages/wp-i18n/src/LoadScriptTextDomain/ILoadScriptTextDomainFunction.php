<?php
declare(strict_types=1);

namespace LunaPress\Wp\I18nContracts\LoadScriptTextDomain;

use LunaPress\FoundationContracts\Support\IExecutableFunction;
use LunaPress\Wp\I18nContracts\Support\IHasDomain;

defined('ABSPATH') || exit;

interface ILoadScriptTextDomainFunction extends IExecutableFunction, IHasDomain
{
    public function handle(string $handle): static;
    public function path(string $path): static;

    public function getHandle(): string;
    public function getPath(): string;
}
