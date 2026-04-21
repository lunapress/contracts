<?php

declare(strict_types=1);

namespace LunaPress\FoundationContracts\Module;

use LunaPress\FoundationContracts\Subscriber\ISubscriber;



interface IModule
{
    /**
     * @return ISubscriber[]|class-string<ISubscriber>[]
     */
    public function subscribers(): array;
}
