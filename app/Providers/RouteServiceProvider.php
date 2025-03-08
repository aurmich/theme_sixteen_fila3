<?php

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
declare(strict_types=1);

<<<<<<< HEAD
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
namespace Modules\Setting\Providers;
=======
namespace Modules\Job\Providers;
>>>>>>> 648bc7d47c (Squashed 'laravel/Modules/Job/' content from commit df60037ec)
=======
namespace Modules\Media\Providers;
>>>>>>> 7695ceaeea (Squashed 'laravel/Modules/Media/' content from commit 16aedf8e8)
=======
namespace Modules\Notify\Providers;
>>>>>>> b7387cfd6b (Squashed 'laravel/Modules/Notify/' content from commit eb4e12f9e)
=======
namespace Modules\Gdpr\Providers;
>>>>>>> ea9b3fa68f (Squashed 'laravel/Modules/Gdpr/' content from commit fbf6cfe9f3)

=======
namespace Modules\Blog\Providers;

use BezhanSalleh\FilamentLanguageSwitch\Http\Middleware\SwitchLanguageLocale;
use Illuminate\Routing\Router;
>>>>>>> e61f4ca484 (Squashed 'laravel/Modules/Blog/' content from commit d4b44b78aa)
=======
/**
 * ---.
 */

declare(strict_types=1);

namespace Modules\Rating\Providers;

>>>>>>> d14059a494 (Squashed 'laravel/Modules/Rating/' content from commit d80b37240f)
=======
declare(strict_types=1);

namespace Modules\Lang\Providers;

>>>>>>> fe8f33e433 (Squashed 'laravel/Modules/Lang/' content from commit 962fba1cc2)
use Modules\Xot\Providers\XotBaseRouteServiceProvider;

class RouteServiceProvider extends XotBaseRouteServiceProvider
{
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
    /**
     * The module namespace to assume when generating URLs to actions.
     */
    protected string $moduleNamespace = 'Modules\Notify\Http\Controllers';
>>>>>>> b7387cfd6b (Squashed 'laravel/Modules/Notify/' content from commit eb4e12f9e)
=======
    protected string $moduleNamespace = 'Modules\Gdpr\Http\Controllers';
>>>>>>> ea9b3fa68f (Squashed 'laravel/Modules/Gdpr/' content from commit fbf6cfe9f3)
=======
    /**
     * The module namespace to assume when generating URLs to actions.
     */
    protected string $moduleNamespace = 'Modules\Blog\Http\Controllers';
>>>>>>> e61f4ca484 (Squashed 'laravel/Modules/Blog/' content from commit d4b44b78aa)
=======
    protected string $moduleNamespace = 'Modules\Rating\Http\Controllers';
>>>>>>> d14059a494 (Squashed 'laravel/Modules/Rating/' content from commit d80b37240f)
=======
    /**
     * The module namespace to assume when generating URLs to actions.
     */
    protected string $moduleNamespace = 'Modules\Lang\Http\Controllers';
>>>>>>> fe8f33e433 (Squashed 'laravel/Modules/Lang/' content from commit 962fba1cc2)

    protected string $module_dir = __DIR__;

    protected string $module_ns = __NAMESPACE__;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
    public string $name = 'Blog';
>>>>>>> e61f4ca484 (Squashed 'laravel/Modules/Blog/' content from commit d4b44b78aa)
=======
namespace Modules\Cms\Providers;

use Exception;
use Illuminate\Routing\Router;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Str;
use Modules\Tenant\Services\TenantService;
use Modules\Xot\Http\Middleware\SetDefaultLocaleForUrlsMiddleware;
use Modules\Xot\Providers\XotBaseRouteServiceProvider;

// public function boot(\Illuminate\Routing\Router $router)

=======
declare(strict_types=1);

namespace Modules\Geo\Providers;

// --- bases ---
use Modules\Xot\Providers\XotBaseRouteServiceProvider;

/**
 * Class RouteServiceProvider.
 */
>>>>>>> ba90976186 (Squashed 'laravel/Modules/Geo/' content from commit e43082ddab)
class RouteServiceProvider extends XotBaseRouteServiceProvider
{
    /**
     * The module namespace to assume when generating URLs to actions.
     */
<<<<<<< HEAD
    protected string $moduleNamespace = 'Modules\Cms\Http\Controllers';

    /**
     * The module directory.
     */
    protected string $module_dir = __DIR__;

    /**
     * The module namespace.
     */
    protected string $module_ns = __NAMESPACE__;
    public string $name = 'Cms';
>>>>>>> c0f6f7d0d3 (Squashed 'laravel/Modules/Cms/' content from commit 8c1c023bf9)
=======

    public string $name = 'Lang';
>>>>>>> fe8f33e433 (Squashed 'laravel/Modules/Lang/' content from commit 962fba1cc2)

    public function boot(): void
    {
        parent::boot();
<<<<<<< HEAD
        // 36     Cannot access offset 'router' on Illuminate\Contracts\Foundation\Application
        // $router = $this->app['router'];
<<<<<<< HEAD
<<<<<<< HEAD
        $router = app('router');
        // dddx([$router, $router1]);

        $this->registerLang();

        $this->registerRoutePattern($router);
        $this->registerMyMiddleware($router);

        // $lang = request()->user()?->locale ?? app()->getLocale();
        // URL::defaults(['locale' => $request->user()?->locale]);
        // URL::defaults(['lang' => $lang]);
=======
        $router = app('router');
        // dddx([$router, $router1]);

        // $this->registerLang();
        $this->registerRoutePattern($router);
        $this->registerMyMiddleware($router);
>>>>>>> c0f6f7d0d3 (Squashed 'laravel/Modules/Cms/' content from commit 8c1c023bf9)
    }

    public function registerMyMiddleware(Router $router): void
    {
<<<<<<< HEAD
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
=======
        // $router->pushMiddlewareToGroup('web', SetDefaultLocaleForUrlsMiddleware::class);
        // $router->prependMiddlewareToGroup('web', SetDefaultLocaleForUrlsMiddleware::class);
        // $router->prependMiddlewareToGroup('api', SetDefaultLocaleForUrlsMiddleware::class);
    }

    /*
    public function registerLang(): void
    {

        $locales = config('laravellocalization.supportedLocales');
        if (! \is_array($locales)) {
            // throw new \Exception('[.__LINE__.]['.class_basename(__CLASS__).']');
            $locales = ['it' => 'it', 'en' => 'en'];
        }
        $langs = array_keys($locales);

        if (! \is_array($langs)) {
            throw new \Exception('[.__LINE__.]['.class_basename(__CLASS__).']');
        }
        if (\in_array(\Request::segment(1),  $langs, false)) {
            $lang = \Request::segment(1);
            if (null !== $lang) {
                App::setLocale($lang);
            }
        }
    }
    */
>>>>>>> c0f6f7d0d3 (Squashed 'laravel/Modules/Cms/' content from commit 8c1c023bf9)

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
<<<<<<< HEAD

=======
>>>>>>> c0f6f7d0d3 (Squashed 'laravel/Modules/Cms/' content from commit 8c1c023bf9)
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
<<<<<<< HEAD

=======
        /*--pattern vuoto
        dddx([
            'lang_pattern' => $lang_pattern,
            'container0_pattern' => $container0_pattern,
            'config_path' => TenantService::getConfigPath('morph_map'),
        ]);
        */
        // da erore livewire ?
>>>>>>> c0f6f7d0d3 (Squashed 'laravel/Modules/Cms/' content from commit 8c1c023bf9)
        // $router->pattern('container0', $container0_pattern);
    }

    // end registerRoutePattern
<<<<<<< HEAD
=======
    public string $name = 'Setting';
>>>>>>> 998733306b (Squashed 'laravel/Modules/Setting/' content from commit 952570add)
=======

    public string $name = 'Job';
>>>>>>> 648bc7d47c (Squashed 'laravel/Modules/Job/' content from commit df60037ec)
=======

    public string $name = 'Media';
>>>>>>> 7695ceaeea (Squashed 'laravel/Modules/Media/' content from commit 16aedf8e8)
=======

    public string $name = 'Notify';
>>>>>>> b7387cfd6b (Squashed 'laravel/Modules/Notify/' content from commit eb4e12f9e)
=======

    public string $name = 'Gdpr';
>>>>>>> ea9b3fa68f (Squashed 'laravel/Modules/Gdpr/' content from commit fbf6cfe9f3)
=======
        // $router = app('router');
        // dddx([$router, $router1]);

        // $this->registerLang();
        // $this->registerRoutePattern($router);
        // $this->registerMyMiddleware($router);
=======
        $this->registerLang();
>>>>>>> fe8f33e433 (Squashed 'laravel/Modules/Lang/' content from commit 962fba1cc2)
    }

    public function register(): void
    {
        parent::register();
<<<<<<< HEAD
        // dddx('b');
    }

    // public function registerMyMiddleware(Router $router): void
    // {
    // $router->pushMiddlewareToGroup('web', SetDefaultLocaleForUrlsMiddleware::class);
    // $router->appendMiddlewareToGroup('web', SwitchLanguageLocale::class);
    // $router->appendMiddlewareToGroup('api', SwitchLanguageLocale::class);
    // }
>>>>>>> e61f4ca484 (Squashed 'laravel/Modules/Blog/' content from commit d4b44b78aa)
=======
>>>>>>> c0f6f7d0d3 (Squashed 'laravel/Modules/Cms/' content from commit 8c1c023bf9)
=======

    public string $name = 'Rating';
>>>>>>> d14059a494 (Squashed 'laravel/Modules/Rating/' content from commit d80b37240f)
=======
        // $this->registerLang();
    }

    public function registerLang(): void
    {
        $locales = config('laravellocalization.supportedLocales');
        if (! \is_array($locales)) {
            $locales = ['it' => 'it', 'en' => 'en'];
        }
        $langs = array_keys($locales);

        /*
        if (! \is_array($langs)) {
            throw new \Exception('[.__LINE__.]['.class_basename(self::class).']');
        }
        \getRouteParameters();
        */
        $n = 1;
        if (inAdmin()) {
            $n = 3;
        }

        if (\in_array(request()->segment($n), $langs, false)) {
            $lang = request()->segment($n);
            if (null !== $lang) {
                app()->setLocale($lang);
            }
        }
    }
>>>>>>> fe8f33e433 (Squashed 'laravel/Modules/Lang/' content from commit 962fba1cc2)
=======
    protected string $moduleNamespace = 'Modules\Geo\Http\Controllers';

    protected string $module_dir = __DIR__;

    protected string $module_ns = __NAMESPACE__;

    public string $name = 'Geo';
>>>>>>> ba90976186 (Squashed 'laravel/Modules/Geo/' content from commit e43082ddab)
}
