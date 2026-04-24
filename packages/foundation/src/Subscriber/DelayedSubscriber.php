<?php

declare(strict_types=1);

namespace LunaPress\FoundationContracts\Subscriber;

interface DelayedSubscriber extends Subscriber
{
    public static function afterHook(): string;

    public static function afterPriority(): int;

    public static function afterArgs(): int;
}
