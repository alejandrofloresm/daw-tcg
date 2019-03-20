<?php

use Illuminate\Http\Request;

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

Route::get('cards', 'Api\CardsController@index')->name('api.cards.index');
Route::get('cards/{card}', 'Api\CardsController@show')->name('api.cards.show');
Route::post('cards', 'Api\CardsController@store')->name('api.cards.store');
