<?php

declare(strict_types=1);

namespace LunaPress\Wp\I18nContracts\Function\LoadMuPluginTextDomain;

use LunaPress\Wp\I18nContracts\Entity\ITranslatorFunction;



interface ILoadMuPluginTextDomainFunction extends ITranslatorFunction
{
    public function muPluginRelPath(string $muPluginRelPath): static;

    public function getMuPluginRelPath(): string;
}
