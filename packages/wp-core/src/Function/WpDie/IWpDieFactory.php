<?php
declare(strict_types=1);

namespace LunaPress\Wp\CoreContracts\Function\WpDie;

use LunaPress\FoundationContracts\Support\IFactory;
use LunaPress\Wp\CoreContracts\Function\WpDie\IWpDieFunction;
use LunaPress\Wp\CoreContracts\Entity\WpError\IWpError;

defined('ABSPATH') || exit;

interface IWpDieFactory extends IFactory
{
    public function make(string|IWpError $message): IWpDieFunction;
}
