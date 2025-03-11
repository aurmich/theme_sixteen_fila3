<?php

declare(strict_types=1);

namespace Modules\Geo\Providers;

// --- bases ---
use Modules\Xot\Providers\XotBaseRouteServiceProvider;

/**
 * Class RouteServiceProvider.
 */
class RouteServiceProvider extends XotBaseRouteServiceProvider
{
    /**
     * The module namespace to assume when generating URLs to actions.
     */
    protected string $moduleNamespace = 'Modules\Geo\Http\Controllers';
<<<<<<< HEAD
    protected string $module_dir = __DIR__;
    protected string $module_ns = __NAMESPACE__;
=======

    protected string $module_dir = __DIR__;

    protected string $module_ns = __NAMESPACE__;

>>>>>>> 12c05b24a2 (**Remove unnecessary files and directories from the Setting module**)
    public string $name = 'Geo';
}
