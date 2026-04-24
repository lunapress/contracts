<?php

declare(strict_types=1);

namespace LunaPress\FoundationContracts\Subscriber;

interface Subscriber
{
    public function callback(): callable;
}
