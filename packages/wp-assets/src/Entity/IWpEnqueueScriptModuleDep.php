<?php

namespace LunaPress\Wp\AssetsContracts\Entity;

use LunaPress\Wp\AssetsContracts\Enum\ScriptModuleImport;

interface IWpEnqueueScriptModuleDep
{
    public function id(string $id): self;

    public function import(ScriptModuleImport $import): self;

    public function getId(): string;

    public function getImport(): ScriptModuleImport;
}
