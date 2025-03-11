<?php

declare(strict_types=1);

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
namespace Modules\Xot\Providers;

use Filament\Facades\Filament;
use Illuminate\Routing\Router;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Str;
use Modules\Xot\Http\Middleware\SetDefaultLocaleForUrls;
use Modules\Xot\Http\Middleware\SetDefaultTenantForUrlsMiddleware;

// public function boot(\Illuminate\Routing\Router $router)

// --- bases -----

class RouteServiceProvider extends XotBaseRouteServiceProvider
{
    public string $name = 'Xot';

    protected string $moduleNamespace = 'Modules\Xot\Http\Controllers';
=======
namespace Modules\Job\Providers;
=======
namespace Modules\User\Providers;
>>>>>>> 3f813922dc (Squashed 'laravel/Modules/User/' content from commit edfbd6fa7)
=======
namespace Modules\Media\Providers;
>>>>>>> 38c1507055 (Squashed 'laravel/Modules/Media/' content from commit 4548be09a)
=======
namespace Modules\Notify\Providers;
>>>>>>> 946fdba366 (Squashed 'laravel/Modules/Notify/' content from commit 6aac1e028)
=======
namespace Modules\Tenant\Providers;
>>>>>>> 1c8d7d06e0 (Squashed 'laravel/Modules/Tenant/' content from commit be731f696)
=======
namespace Modules\UI\Providers;
>>>>>>> 660b6fffd2 (Squashed 'laravel/Modules/UI/' content from commit b14fdc133)

use Modules\Xot\Providers\XotBaseRouteServiceProvider;

class RouteServiceProvider extends XotBaseRouteServiceProvider
{
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    protected string $moduleNamespace = 'Modules\Job\Http\Controllers';
>>>>>>> 90bf7d5b85 (Squashed 'laravel/Modules/Job/' content from commit d3ea5c83e)
=======
    protected string $moduleNamespace = 'Modules\User\Http\Controllers';
>>>>>>> 3f813922dc (Squashed 'laravel/Modules/User/' content from commit edfbd6fa7)
=======
    /**
     * The module namespace to assume when generating URLs to actions.
     */
    protected string $moduleNamespace = 'Modules\Media\Http\Controllers';
>>>>>>> 38c1507055 (Squashed 'laravel/Modules/Media/' content from commit 4548be09a)
=======
    /**
     * The module namespace to assume when generating URLs to actions.
     */
    protected string $moduleNamespace = 'Modules\Notify\Http\Controllers';
>>>>>>> 946fdba366 (Squashed 'laravel/Modules/Notify/' content from commit 6aac1e028)
=======
    /**
     * The module namespace to assume when generating URLs to actions.
     */
    protected string $moduleNamespace = 'Modules\Tenant\Http\Controllers';
>>>>>>> 1c8d7d06e0 (Squashed 'laravel/Modules/Tenant/' content from commit be731f696)
=======
    protected string $moduleNamespace = 'Modules\UI\Http\Controllers';
>>>>>>> 660b6fffd2 (Squashed 'laravel/Modules/UI/' content from commit b14fdc133)

    protected string $module_dir = __DIR__;

    protected string $module_ns = __NAMESPACE__;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function boot(): void
    {
        parent::boot();
        // 36     Cannot access offset 'router' on Illuminate\Contracts\Foundation\Application
        // $router = $this->app['router'];
        $router = app('router');
        // dddx([$router, $router1]);

        $this->registerLang();

        $this->registerRoutePattern($router);
        $this->registerMyMiddleware($router);

        // $lang = request()->user()?->locale ?? app()->getLocale();
        // URL::defaults(['locale' => $request->user()?->locale]);
        // URL::defaults(['lang' => $lang]);
    }

    public function registerMyMiddleware(Router $router): void
    {
        // $router->prependMiddlewareToGroup('web', SetDefaultLocaleForUrls::class);
        // $router->prependMiddlewareToGroup('api', SetDefaultLocaleForUrls::class);
        // $router->pushMiddlewareToGroup('web', \Spatie\ResponseCache\Middlewares\CacheResponse::class);
        // $router->pushMiddlewareToGroup('api', \Spatie\ResponseCache\Middlewares\CacheResponse::class);
        $router->prependMiddlewareToGroup('web', SetDefaultTenantForUrlsMiddleware::class);
        $router->prependMiddlewareToGroup('api', SetDefaultTenantForUrlsMiddleware::class);
    }

    public function registerLang(): void
    {
        $langs = ['it', 'en'];
        $user = request()->user();
        $lang = app()->getLocale();
        if (null !== $user) {
            $lang = $user->lang ?? $lang;
        }
        $locales = config('laravellocalization.supportedLocales');
        if (is_array($locales)) {
            $langs = array_keys($locales);
        }

        // if (! \is_array($langs)) {
        //    throw new \Exception('[.__LINE__.]['.class_basename(__CLASS__).']');
        // }

        if (\in_array(request()->segment(1), $langs, false)) {
            $lang = request()->segment(1);
            if (null !== $lang) {
                app()->setLocale($lang);
            }
        }

        URL::defaults([
            // 'tenant' => Filament::getTenant(),
            'lang' => $lang,
        ]);
    }

    public function registerRoutePattern(Router $router): void
    {
        // ---------- Lang Route Pattern
        $langs = config('laravellocalization.supportedLocales');
        if (! \is_array($langs)) {
            // throw new \Exception('[.__LINE__.]['.class_basename(__CLASS__).']');
            $langs = ['it' => 'it', 'en' => 'en'];
        }

        $lang_pattern = collect(array_keys($langs))->implode('|');
        $lang_pattern = '/|'.$lang_pattern.'|/i';

        $router->pattern('lang', $lang_pattern);
        // -------------------------------------------------------------

        $models = config('morph_map');
        if (! \is_array($models)) {
            // throw new Exception('[' . print_r($models, true) . '][' . __LINE__ . '][' . class_basename(__CLASS__) . ']');
            $models = [];
        }

        $models_collect = collect(array_keys($models));
        $models_collect->implode('|');
        $models_collect->map(
            static fn ($item) => Str::plural((string) $item)
        )->implode('|');

        // $router->pattern('container0', $container0_pattern);
    }

    // end registerRoutePattern
=======
    public string $name = 'Job';
>>>>>>> 90bf7d5b85 (Squashed 'laravel/Modules/Job/' content from commit d3ea5c83e)
=======
    public string $name = 'User';
>>>>>>> 3f813922dc (Squashed 'laravel/Modules/User/' content from commit edfbd6fa7)
=======
    public string $name = 'Media';
>>>>>>> 38c1507055 (Squashed 'laravel/Modules/Media/' content from commit 4548be09a)
=======
    public string $name = 'Notify';
>>>>>>> 946fdba366 (Squashed 'laravel/Modules/Notify/' content from commit 6aac1e028)
=======
    public string $name = 'Tenant';
>>>>>>> 1c8d7d06e0 (Squashed 'laravel/Modules/Tenant/' content from commit be731f696)
=======
    public string $name = 'UI';
>>>>>>> 660b6fffd2 (Squashed 'laravel/Modules/UI/' content from commit b14fdc133)
}
