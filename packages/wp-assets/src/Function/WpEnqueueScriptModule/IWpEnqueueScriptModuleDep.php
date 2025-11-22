<?php
declare(strict_types=1);

namespace LunaPress\Wp\AssetsContracts\Function\WpEnqueueScriptModule;

use LunaPress\FoundationContracts\Support\WpFunction\WpUnset;
use LunaPress\Wp\AssetsContracts\Enum\ScriptModuleImport;
use LunaPress\FoundationContracts\Support\WpFunction\IWpFunctionArgs;

defined('ABSPATH') || exit;

interface IWpEnqueueScriptModuleDep extends IWpFunctionArgs
{
    public function id(string $id): self;

    public function import(ScriptModuleImport|WpUnset $import): self;

    public function getId(): string;

    public function getImport(): ScriptModuleImport|WpUnset;
}
