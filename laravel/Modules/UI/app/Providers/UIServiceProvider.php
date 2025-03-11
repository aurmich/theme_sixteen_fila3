<?php

declare(strict_types=1);

namespace Modules\UI\Providers;

use Illuminate\Foundation\AliasLoader;
use Illuminate\Support\Facades\Blade;
use Modules\UI\Services\UIService;
use Modules\Xot\Providers\XotBaseServiceProvider;

use function Safe\realpath;

<<<<<<< HEAD
use Webmozart\Assert\Assert;

=======
>>>>>>> 12c05b24a2 (**Remove unnecessary files and directories from the Setting module**)
/**
 * ---.
 */
class UIServiceProvider extends XotBaseServiceProvider
{
    public string $name = 'UI';
<<<<<<< HEAD
    protected string $module_dir = __DIR__;
=======

    protected string $module_dir = __DIR__;

>>>>>>> 12c05b24a2 (**Remove unnecessary files and directories from the Setting module**)
    protected string $module_ns = __NAMESPACE__;

    /**
     * Undocumented function.
     */
    public function boot(): void
    {
        parent::boot();

<<<<<<< HEAD
        Assert::string($relativePath = config('modules.paths.generator.component-view.path'));
=======
        $relativePath = config('modules.paths.generator.component-view.path');
>>>>>>> 12c05b24a2 (**Remove unnecessary files and directories from the Setting module**)
        $components_path = module_path($this->name, $relativePath);

        // $components_path = realpath(__DIR__.'/../resources/views/components');
        Blade::anonymousComponentPath($components_path);
    }

    public function register(): void
    {
        parent::register();
        // $loader = AliasLoader::getInstance();
        // $loader->alias('ui', UIService::class);
        // $this->registerBladeIcons(); //moved to XotBaseServiceProvider
    }
}
