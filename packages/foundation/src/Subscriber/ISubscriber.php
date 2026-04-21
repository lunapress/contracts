<?php

declare(strict_types=1);

namespace LunaPress\FoundationContracts\Subscriber;

interface ISubscriber
{
    public function callback(): callable;
}
