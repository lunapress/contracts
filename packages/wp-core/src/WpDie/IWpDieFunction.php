<?php
declare(strict_types=1);

namespace Lunapress\Wp\CoreContracts\WpDie;

use Lunapress\Wp\CoreContracts\WpError;
use Lunapress\CoreContracts\Support\ExecutableFunction;

defined('ABSPATH') || exit;

interface IWpDieFunction extends ExecutableFunction
{
    public function message(string|WpError $message): self;
    public function title(string|int $title): self;
    public function args(IWpDieArgs|int $args): self;

    public function executeWithArgs(array $args): never;
}
