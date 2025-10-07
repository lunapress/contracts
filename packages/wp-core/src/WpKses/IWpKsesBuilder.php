<?php
declare(strict_types=1);

namespace LunaPress\Wp\CoreContracts\WpKses;

use LunaPress\CoreContracts\Support\FunctionBuilder;

defined('ABSPATH') || exit;

interface IWpKsesBuilder extends FunctionBuilder
{
    public function make(string $content, array|string $allowedHtml): IWpKsesFunction;
}
