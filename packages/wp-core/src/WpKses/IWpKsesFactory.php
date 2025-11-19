<?php
declare(strict_types=1);

namespace LunaPress\Wp\CoreContracts\WpKses;

use LunaPress\FoundationContracts\Support\IFactory;

defined('ABSPATH') || exit;

interface IWpKsesFactory extends IFactory
{
    public function make(string $content, array|string $allowedHtml): IWpKsesFunction;
}
