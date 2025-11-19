<?php
declare(strict_types=1);

namespace LunaPress\Wp\CoreContracts\WpDie;

use LunaPress\FoundationContracts\Support\IFactory;
use LunaPress\Wp\CoreContracts\IWpError;

defined('ABSPATH') || exit;

interface IWpDieFactory extends IFactory
{
    public function make(string|IWpError $message): IWpDieFunction;
}
