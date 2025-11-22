<?php
declare(strict_types=1);

namespace LunaPress\Wp\CoreContracts\Function\WpDie;

use LunaPress\Wp\CoreContracts\Function\WpDie\IWpDieArgs;
use LunaPress\Wp\CoreContracts\Entity\WpError\IWpError;
use LunaPress\FoundationContracts\Support\IExecutableFunction;
use LunaPress\FoundationContracts\Support\WpFunction\WpArray;

defined('ABSPATH') || exit;

interface IWpDieFunction extends IExecutableFunction
{
    public function message(string|IWpError $message): self;
    public function title(string|int $title): self;
    public function args(IWpDieArgs|WpArray $args): self;

    public function getMessage(): string|IWpError;
    public function getTitle(): string|int;
    public function getArgs(): IWpDieArgs|WpArray;

    public function executeWithArgs(array $args): never;
}
