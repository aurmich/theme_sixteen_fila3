<?php

declare(strict_types=1);

namespace Modules\Comment\Providers;

use Modules\Xot\Providers\XotBaseRouteServiceProvider;

class RouteServiceProvider extends XotBaseRouteServiceProvider
{
    /**
     * The module namespace to assume when generating URLs to actions.
     */
    protected string $moduleNamespace = 'Modules\Comment\Http\Controllers';

    protected string $module_dir = __DIR__;

    protected string $module_ns = __NAMESPACE__;
<<<<<<< HEAD

=======
>>>>>>> 12c05b24a2 (**Remove unnecessary files and directories from the Setting module**)
    public string $name = 'Comment';
}
