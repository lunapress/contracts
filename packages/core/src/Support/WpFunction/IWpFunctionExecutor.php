<?php
declare(strict_types=1);

namespace LunaPress\CoreContracts\Support\WpFunction;

use LunaPress\CoreContracts\Support\IExecutableFunction;

defined('ABSPATH') || exit;

/**
 * @template TResult
 */
interface IWpFunctionExecutor
{
    /**
     * @param IExecutableFunction<TResult> $function
     * @return TResult
     */
    public function execute(IExecutableFunction $function): mixed;
}
