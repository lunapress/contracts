<?php
declare(strict_types=1);

namespace LunaPress\CoreContracts\Support\WpFunction;

use LunaPress\CoreContracts\Support\ExecutableFunction;

defined('ABSPATH') || exit;

/**
 * @template TResult
 */
interface IWpFunctionExecutor
{
    /**
     * @param ExecutableFunction<TResult> $function
     * @return TResult
     */
    public function execute(ExecutableFunction $function): mixed;
}
