<?php

declare(strict_types=1);

namespace LunaPress\CoreContracts\Subscriber;

use LunaPress\FoundationContracts\Subscriber\Subscriber;

interface SubscriberRegistry
{
    /**
     * @param array<class-string<Subscriber>|Subscriber> $subscribers
     */
    public function registerMany(array $subscribers): void;

    public function register(Subscriber $subscriber): void;
}
