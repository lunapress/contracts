<?php
declare(strict_types=1);

namespace LunaPress\Wp\I18nContracts\Function\LoadMuPluginTextDomain;

use LunaPress\Wp\I18nContracts\Entity\ITranslatorFunction;

defined('ABSPATH') || exit;

interface ILoadMuPluginTextDomainFunction extends ITranslatorFunction
{
    public function muPluginRelPath(string $muPluginRelPath): static;

    public function getMuPluginRelPath(): string;
}
