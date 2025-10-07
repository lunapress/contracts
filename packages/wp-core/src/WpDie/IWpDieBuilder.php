<?php
declare(strict_types=1);

namespace Lunapress\Wp\CoreContracts\WpDie;

use Lunapress\CoreContracts\Support\FunctionBuilder;
use Lunapress\Wp\CoreContracts\WpError;

defined('ABSPATH') || exit;

interface IWpDieBuilder extends FunctionBuilder
{
    public function make(string|WpError $message): IWpDieFunction;
}
