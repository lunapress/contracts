<?php
declare(strict_types=1);

namespace LunaPress\Wp\CoreContracts\Function\WpKses;

use LunaPress\FoundationContracts\Support\IFactory;
use LunaPress\Wp\CoreContracts\Function\WpKses\IWpKsesFunction;

defined('ABSPATH') || exit;

interface IWpKsesFactory extends IFactory
{
    public function make(string $content, array|string $allowedHtml): IWpKsesFunction;
}
