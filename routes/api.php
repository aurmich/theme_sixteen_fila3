<?php

declare(strict_types=1);

<<<<<<< HEAD
=======
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

>>>>>>> 998733306b (Squashed 'laravel/Modules/Setting/' content from commit 952570add)
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
/*
Route::middleware('auth:api')->get('/xot', function (Request $request) {
    return $request->user();
});
=======

/*
Route::middleware('auth:api')->get('/setting', fn(Request $request) => $request->user());
>>>>>>> 998733306b (Squashed 'laravel/Modules/Setting/' content from commit 952570add)
*/
