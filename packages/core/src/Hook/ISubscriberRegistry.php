<?php
declare(strict_types=1);

namespace Lunapress\CoreContracts\Hook;

defined('ABSPATH') || exit;

interface ISubscriberRegistry
{
    /**
     * @param array<class-string<Subscriber>|Subscriber> $subscribers
     */
    public function registerMany(array $subscribers): void;

    public function register(Subscriber $subscriber): void;
}
