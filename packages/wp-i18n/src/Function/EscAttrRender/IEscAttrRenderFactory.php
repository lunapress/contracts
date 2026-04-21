<?php

declare(strict_types=1);

namespace LunaPress\Wp\I18nContracts\Function\EscAttrRender;

use LunaPress\FoundationContracts\Support\IFactory;



interface IEscAttrRenderFactory extends IFactory
{
    public function make(string $text): IEscAttrRenderFunction;
}
