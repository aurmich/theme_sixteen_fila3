<?php

declare(strict_types=1);

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
namespace Modules\Setting\Providers;
=======
namespace Modules\Job\Providers;
>>>>>>> 648bc7d47c (Squashed 'laravel/Modules/Job/' content from commit df60037ec)
=======
namespace Modules\Media\Providers;
>>>>>>> 7695ceaeea (Squashed 'laravel/Modules/Media/' content from commit 16aedf8e8)

use Modules\Xot\Providers\XotBaseRouteServiceProvider;

class RouteServiceProvider extends XotBaseRouteServiceProvider
{
<<<<<<< HEAD
<<<<<<< HEAD
    protected string $moduleNamespace = 'Modules\Setting\Http\Controllers';
>>>>>>> 998733306b (Squashed 'laravel/Modules/Setting/' content from commit 952570add)
=======
    protected string $moduleNamespace = 'Modules\Job\Http\Controllers';
>>>>>>> 648bc7d47c (Squashed 'laravel/Modules/Job/' content from commit df60037ec)
=======
    /**
     * The module namespace to assume when generating URLs to actions.
     */
    protected string $moduleNamespace = 'Modules\Media\Http\Controllers';
>>>>>>> 7695ceaeea (Squashed 'laravel/Modules/Media/' content from commit 16aedf8e8)

    protected string $module_dir = __DIR__;

    protected string $module_ns = __NAMESPACE__;
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
    public string $name = 'Setting';
>>>>>>> 998733306b (Squashed 'laravel/Modules/Setting/' content from commit 952570add)
=======

    public string $name = 'Job';
>>>>>>> 648bc7d47c (Squashed 'laravel/Modules/Job/' content from commit df60037ec)
=======

    public string $name = 'Media';
>>>>>>> 7695ceaeea (Squashed 'laravel/Modules/Media/' content from commit 16aedf8e8)
}
