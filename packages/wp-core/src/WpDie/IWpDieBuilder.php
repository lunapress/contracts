<?php
declare(strict_types=1);

namespace LunaPress\Wp\CoreContracts\WpDie;

use LunaPress\CoreContracts\Support\FunctionBuilder;
use LunaPress\Wp\CoreContracts\WpError;

defined('ABSPATH') || exit;

interface IWpDieBuilder extends FunctionBuilder
{
    public function make(string|WpError $message): IWpDieFunction;
}
