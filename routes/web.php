<?php

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
declare(strict_types=1);
<<<<<<< HEAD

// @include 'web_working.php';
// @require 'web_test.php';

// @require 'web_seo.php';
=======
>>>>>>> 90bf7d5b85 (Squashed 'laravel/Modules/Job/' content from commit d3ea5c83e)
=======
/**
 * @see https://github.com/DutchCodingCompany/filament-socialite/blob/main/routes/web.php
 */

declare(strict_types=1);

use Illuminate\Support\Facades\Route;
use Modules\Xot\Datas\XotData;

=======
>>>>>>> 946fdba366 (Squashed 'laravel/Modules/Notify/' content from commit 6aac1e028)
=======
declare(strict_types=1);

>>>>>>> 1c8d7d06e0 (Squashed 'laravel/Modules/Tenant/' content from commit be731f696)
=======
declare(strict_types=1);

>>>>>>> a27ba4e75b (Squashed 'laravel/Modules/Activity/' content from commit 05cc09d7b)
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
/*
Route::prefix('user')->group(function() {
    Route::get('/', 'UserController@index');
});
*/

// Route::domain(config('filament.domain'))
//    ->middleware(config('filament.middleware.base'))
Route::namespace('Socialite')
    ->name('socialite.')
    ->group(
        static function (): void {
            Route::get(
                '/admin/login/{provider}',
                // 'LoginController@redirectToProvider',
                'RedirectToProviderController',
            )
                ->name('oauth.redirect');
            Route::get(
                '/sso/{provider}/callback',
                'ProcessCallbackController',
            )
                ->name('oauth.callback');
        }
    );

/*
 * ..
 */

// $panel = Filament::getPanel('admin');

// Route::get('/login', $panel->getLoginRouteAction())->name('login');

/*
Route::namespace('\\')
    //->middleware($panel->getMiddleware())
    //->middleware('guest')
    ->group(function () use($panel){
        Route::get('/login', $panel->getLoginRouteAction())->name('login');
        //Route::redirect('/admin/login');
    }
    );
*/

if (XotData::make()->register_pub_theme) {
    require 'web_tall.php';
} else {
    Route::get('/login', static fn () => redirect('/admin/login'))->name('login');
}

Route::get('/upgrade', 'UpgradeController');
>>>>>>> 3f813922dc (Squashed 'laravel/Modules/User/' content from commit edfbd6fa7)
=======
declare(strict_types=1);
>>>>>>> 38c1507055 (Squashed 'laravel/Modules/Media/' content from commit 4548be09a)
=======

// Filament will handle all routes for this module
>>>>>>> 946fdba366 (Squashed 'laravel/Modules/Notify/' content from commit 6aac1e028)
=======
/*
Route::prefix('tenant')->group(function() {
    Route::get('/', 'TenantController@index');
});
*/
>>>>>>> 1c8d7d06e0 (Squashed 'laravel/Modules/Tenant/' content from commit be731f696)
=======
declare(strict_types=1);

/*
 * --empty
 */
>>>>>>> 660b6fffd2 (Squashed 'laravel/Modules/UI/' content from commit b14fdc133)
=======

/*Route::prefix('activity')->group(function () {
    Route::get('/', 'ActivityController@index');
});
*/
>>>>>>> a27ba4e75b (Squashed 'laravel/Modules/Activity/' content from commit 05cc09d7b)
=======
declare(strict_types=1);

/*
 * ---
 */
>>>>>>> ecd8d46956 (Squashed 'laravel/Modules/Gdpr/' content from commit d30cea3b2)
=======
declare(strict_types=1);
>>>>>>> c1120baae0 (Squashed 'laravel/Modules/Lang/' content from commit 693742e073)
