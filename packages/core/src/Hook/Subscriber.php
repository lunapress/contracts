<?php
declare(strict_types=1);

namespace LunaPress\CoreContracts\Hook;

defined('ABSPATH') || exit;

interface Subscriber
{
    public function callback(): callable;
}
