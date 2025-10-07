<?php
declare(strict_types=1);

namespace Lunapress\Wp\CoreContracts\WpDie;

use Lunapress\CoreContracts\Support\WpFunction\IWpFunctionArgsFactory;

defined('ABSPATH') || exit;

interface IWpDieArgsFactory extends IWpFunctionArgsFactory
{
    public function make(): IWpDieArgs;
}
