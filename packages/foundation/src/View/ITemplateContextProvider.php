<?php

declare(strict_types=1);

namespace LunaPress\FoundationContracts\View;

interface ITemplateContextProvider
{
    public function getContext(): array;
}
