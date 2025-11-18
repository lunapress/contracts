<?php
declare(strict_types=1);

namespace LunaPress\FoundationContracts\Subscriber;

defined('ABSPATH') || exit;

interface IDelayedSubscriber extends ISubscriber
{
    public static function afterHook(): string;

    public static function afterPriority(): int;

    public static function afterArgs(): int;
}
