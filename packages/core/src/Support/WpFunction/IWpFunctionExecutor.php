<?php
declare(strict_types=1);

namespace Lunapress\CoreContracts\Support\WpFunction;

use Lunapress\CoreContracts\Support\ExecutableFunction;

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
