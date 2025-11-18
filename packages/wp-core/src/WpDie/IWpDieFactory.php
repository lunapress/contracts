<?php
declare(strict_types=1);

namespace LunaPress\Wp\CoreContracts\WpDie;

use LunaPress\CoreContracts\Support\Factory;
use LunaPress\Wp\CoreContracts\WpError;

defined('ABSPATH') || exit;

interface IWpDieFactory extends Factory
{
    public function make(string|WpError $message): IWpDieFunction;
}
