<?php
declare(strict_types=1);

namespace LunaPress\Wp\I18nContracts\LoadScriptTextDomain;

use LunaPress\FoundationContracts\Support\IExecutableFunction;

defined('ABSPATH') || exit;

interface ILoadScriptTextDomainFunction extends IExecutableFunction
{
    public function handle(string $handle): self;
    public function domain(string $domain): self;
    public function path(string $path): self;

    public function getHandle(): string;
    public function getDomain(): string;
    public function getPath(): string;
}
