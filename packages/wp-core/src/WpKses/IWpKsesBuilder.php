<?php
declare(strict_types=1);

namespace Lunapress\Wp\CoreContracts\WpKses;

use Lunapress\CoreContracts\Support\FunctionBuilder;

defined('ABSPATH') || exit;

interface IWpKsesBuilder extends FunctionBuilder
{
    public function make(string $content, array|string $allowedHtml): IWpKsesFunction;
}
