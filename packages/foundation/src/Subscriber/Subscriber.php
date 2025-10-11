<?php
declare(strict_types=1);

namespace LunaPress\FoundationContracts\Subscriber;

defined('ABSPATH') || exit;

interface Subscriber
{
    public function callback(): callable;
}
