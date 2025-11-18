<?php
declare(strict_types=1);

namespace LunaPress\CoreContracts\Subscriber;

use LunaPress\FoundationContracts\Subscriber\ISubscriber;

defined('ABSPATH') || exit;

interface ISubscriberRegistry
{
    /**
     * @param array<class-string<ISubscriber>|ISubscriber> $subscribers
     */
    public function registerMany(array $subscribers): void;

    public function register(ISubscriber $subscriber): void;
}
