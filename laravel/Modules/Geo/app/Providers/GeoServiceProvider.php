<?php

declare(strict_types=1);

namespace Modules\Geo\Providers;

// ---- bases ----
use Modules\Xot\Providers\XotBaseServiceProvider;

/**
 * Class GeoServiceProvider.
 */
class GeoServiceProvider extends XotBaseServiceProvider
{
    public string $name = 'Geo';
<<<<<<< HEAD
    protected string $module_dir = __DIR__;
=======

    protected string $module_dir = __DIR__;

>>>>>>> 12c05b24a2 (**Remove unnecessary files and directories from the Setting module**)
    protected string $module_ns = __NAMESPACE__;
}
