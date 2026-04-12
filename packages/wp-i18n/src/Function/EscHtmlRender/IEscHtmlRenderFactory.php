<?php
declare(strict_types=1);

namespace LunaPress\Wp\I18nContracts\Function\EscHtmlRender;

use LunaPress\FoundationContracts\Support\IFactory;

defined('ABSPATH') || exit;

interface IEscHtmlRenderFactory extends IFactory
{
    public function make(string $text): IEscHtmlRenderFunction;
}
