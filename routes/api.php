<?php

declare(strict_types=1);

<<<<<<< HEAD
<<<<<<< HEAD
=======
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

>>>>>>> 998733306b (Squashed 'laravel/Modules/Setting/' content from commit 952570add)
=======
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

>>>>>>> 648bc7d47c (Squashed 'laravel/Modules/Job/' content from commit df60037ec)
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
<<<<<<< HEAD
<<<<<<< HEAD
/*
Route::middleware('auth:api')->get('/xot', function (Request $request) {
    return $request->user();
});
=======

/*
Route::middleware('auth:api')->get('/setting', fn(Request $request) => $request->user());
>>>>>>> 998733306b (Squashed 'laravel/Modules/Setting/' content from commit 952570add)
=======
/*
Route::middleware('auth:api')->get('/job', fn(Request $request) => $request->user());
>>>>>>> 648bc7d47c (Squashed 'laravel/Modules/Job/' content from commit df60037ec)
*/
