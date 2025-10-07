<?php
declare(strict_types=1);

namespace Lunapress\CoreContracts\Hook;

defined('ABSPATH') || exit;

interface DelayedSubscriber extends Subscriber
{
    public static function afterHook(): string;

    public static function afterPriority(): int;

    public static function afterArgs(): int;
}
