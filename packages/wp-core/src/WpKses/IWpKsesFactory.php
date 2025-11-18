<?php
declare(strict_types=1);

namespace LunaPress\Wp\CoreContracts\WpKses;

use LunaPress\CoreContracts\Support\Factory;

defined('ABSPATH') || exit;

interface IWpKsesFactory extends Factory
{
    public function make(string $content, array|string $allowedHtml): IWpKsesFunction;
}
