<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//Route::resource('developers', DeveloperController::class);
Route::apiResource('developers', 'App\\Http\\Controllers\\DeveloperController');
Route::get('/ok', function () {
    return ['APP_URL' => env('APP_URL'), 'APP_ENV' => env('APP_ENV')];
});