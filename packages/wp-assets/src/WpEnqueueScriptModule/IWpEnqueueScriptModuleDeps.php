<?php
declare(strict_types=1);

namespace LunaPress\Wp\AssetsContracts\WpEnqueueScriptModule;

use LunaPress\Wp\AssetsContracts\WpEnqueueScriptModule\Enum\WpEnqueueScriptModuleImport;
use LunaPress\CoreContracts\Support\WpFunction\WpFunctionArgs;

defined('ABSPATH') || exit;

interface IWpEnqueueScriptModuleDeps extends WpFunctionArgs
{
    public function id(string $id): self;

    public function import(WpEnqueueScriptModuleImport $import): self;

    public function getId(): string;

    public function getImport(): WpEnqueueScriptModuleImport;
}
