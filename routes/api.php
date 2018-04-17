<?php

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

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

Route::get('/update-players', 'PlayerController@store');
Route::get('/players', 'PlayerController@show');
Route::get('/players-remove', 'PlayerController@destroy');

Route::get('/update-last-season', 'LastSeasonController@store');
Route::get('/last-season', 'LastSeasonController@show');
Route::get('/last-season-remove', 'LastSeasonController@destroy');
