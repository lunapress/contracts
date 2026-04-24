<?php

declare(strict_types=1);

namespace LunaPress\FoundationContracts\Module;

use LunaPress\FoundationContracts\Subscriber\Subscriber;

interface Module
{
    /**
     * @return Subscriber[]|class-string<Subscriber>[]
     */
    public function subscribers(): array;
}
