<?php

declare(strict_types=1);

namespace Modules\AI\Providers;

// --- bases ---
use Modules\Xot\Providers\XotBaseRouteServiceProvider;

class RouteServiceProvider extends XotBaseRouteServiceProvider
{
    protected string $moduleNamespace = 'Modules\AI\Http\Controllers';
<<<<<<< HEAD

    protected string $module_dir = __DIR__;

    protected string $module_ns = __NAMESPACE__;

=======
    protected string $module_dir = __DIR__;
    protected string $module_ns = __NAMESPACE__;
>>>>>>> 12c05b24a2 (**Remove unnecessary files and directories from the Setting module**)
    public string $name = 'AI';
}
