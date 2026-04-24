<?php

declare(strict_types=1);

namespace LunaPress\CoreContracts\Hook;

interface Hook
{
    public function getName(): string;
    public function getPriority(): int;
    public function getAcceptedArgs(): int;
}
