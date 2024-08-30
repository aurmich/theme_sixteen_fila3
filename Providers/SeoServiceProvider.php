<?php

declare(strict_types=1);

namespace Modules\Seo\Providers;

use Modules\Xot\Providers\XotBaseServiceProvider;

class SeoServiceProvider extends XotBaseServiceProvider
{
    public string $module_name = 'seo';

    protected string $module_dir = __DIR__;

    protected string $module_ns = __NAMESPACE__;
}
