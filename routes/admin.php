<?php

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/

Route::get('/', 'DashboardController@index')->name('dashboard.index');
Route::get('cards', 'CardController@index')->name('cards.index');
Route::get('cards/create', 'CardController@create')->name('cards.create');
Route::post('cards', 'CardController@store')->name('cards.store');

Route::get('categories', 'CategoryController@index')->name('categories.index');
Route::get('categories/create', 'CategoryController@create')->name('categories.create');
Route::post('categories', 'CategoryController@store')->name('categories.store');
