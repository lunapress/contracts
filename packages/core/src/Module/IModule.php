<?php
declare(strict_types=1);

namespace Lunapress\CoreContracts\Module;

use Lunapress\CoreContracts\Hook\Subscriber;

defined('ABSPATH') || exit;

interface IModule
{
    /**
     * @return Subscriber[]|class-string<Subscriber>[]
     */
    public function subscribers(): array;
}
