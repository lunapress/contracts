<?php
declare(strict_types=1);

namespace Lunapress\CoreContracts\Hook;

defined('ABSPATH') || exit;

interface IHook
{
    public function getName(): string;
    public function getPriority(): int;
    public function getAcceptedArgs(): int;
}
