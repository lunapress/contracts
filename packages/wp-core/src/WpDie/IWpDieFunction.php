<?php
declare(strict_types=1);

namespace LunaPress\Wp\CoreContracts\WpDie;

use LunaPress\Wp\CoreContracts\IWpError;
use LunaPress\FoundationContracts\Support\IExecutableFunction;

defined('ABSPATH') || exit;

interface IWpDieFunction extends IExecutableFunction
{
    public function message(string|IWpError $message): self;
    public function title(string|int $title): self;
    public function args(IWpDieArgs|int $args): self;

    public function executeWithArgs(array $args): never;
}
