<?php
declare(strict_types=1);

namespace LunaPress\Wp\I18nContracts\Function\LoadScriptTextDomain;

use LunaPress\Wp\I18nContracts\Entity\ITranslatorFunction;

defined('ABSPATH') || exit;

interface ILoadScriptTextDomainFunction extends ITranslatorFunction
{
    public function handle(string $handle): static;
    public function path(string $path): static;

    public function getHandle(): string;
    public function getPath(): string;
}
