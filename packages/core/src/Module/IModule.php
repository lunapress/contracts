<?php
declare(strict_types=1);

namespace LunaPress\CoreContracts\Module;

use LunaPress\CoreContracts\Hook\Subscriber;

defined('ABSPATH') || exit;

interface IModule
{
    /**
     * @return Subscriber[]|class-string<Subscriber>[]
     */
    public function subscribers(): array;
}
