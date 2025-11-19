<?php
declare(strict_types=1);

namespace LunaPress\FoundationContracts\Support\WpFunction;

use LunaPress\FoundationContracts\Support\IExecutableFunction;

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
