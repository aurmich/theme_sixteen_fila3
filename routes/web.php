<?php

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
declare(strict_types=1);
<<<<<<< HEAD

<<<<<<< HEAD
// @include 'web_working.php';
// @require 'web_test.php';

// @require 'web_seo.php';
=======
=======
/**
 * @see https://github.com/DutchCodingCompany/filament-socialite/blob/main/routes/web.php
 */

declare(strict_types=1);

use Illuminate\Support\Facades\Route;
use Modules\Xot\Datas\XotData;

>>>>>>> 8c6e1cc41e (Squashed 'laravel/Modules/User/' content from commit 193294f1c)
=======
>>>>>>> b7387cfd6b (Squashed 'laravel/Modules/Notify/' content from commit eb4e12f9e)
=======
declare(strict_types=1);

>>>>>>> 88a1f0b933 (Squashed 'laravel/Modules/Tenant/' content from commit ecc88e194)
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

// Route::prefix('setting')->group(function() {
//    Route::get('/', 'SettingController@index');
// });
>>>>>>> 998733306b (Squashed 'laravel/Modules/Setting/' content from commit 952570add)
=======
>>>>>>> 648bc7d47c (Squashed 'laravel/Modules/Job/' content from commit df60037ec)
=======
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
>>>>>>> 8c6e1cc41e (Squashed 'laravel/Modules/User/' content from commit 193294f1c)
=======
declare(strict_types=1);
>>>>>>> 7695ceaeea (Squashed 'laravel/Modules/Media/' content from commit 16aedf8e8)
=======

// Filament will handle all routes for this module
>>>>>>> b7387cfd6b (Squashed 'laravel/Modules/Notify/' content from commit eb4e12f9e)
=======
/*
Route::prefix('tenant')->group(function() {
    Route::get('/', 'TenantController@index');
});
*/
>>>>>>> 88a1f0b933 (Squashed 'laravel/Modules/Tenant/' content from commit ecc88e194)
