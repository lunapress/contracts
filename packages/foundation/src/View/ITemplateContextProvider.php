<?php
declare(strict_types=1);

namespace LunaPress\FoundationContracts\View;

defined('ABSPATH') || exit;

interface ITemplateContextProvider
{
    public function getContext(): array;
}
