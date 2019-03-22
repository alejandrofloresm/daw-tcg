<?php

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/

Route::get('/', 'DashboardController@index')->name('dashboard.index');
Route::get('cards/create', 'CardController@create')->name('cards.create');
Route::get('cards/{order?}', 'CardController@index')->name('cards.index');
Route::post('cards', 'CardController@store')->name('cards.store');

Route::get('categories', 'CategoryController@index')->name('categories.index');
Route::get('categories/create', 'CategoryController@create')->name('categories.create');
Route::post('categories', 'CategoryController@store')->name('categories.store');

Route::get('decks', 'DeckController@index')->name('decks.index');
Route::get('decks/create', 'DeckController@create')->name('decks.create');
Route::post('decks', 'DeckController@store')->name('decks.store');
Route::get('decks/{deck}', 'DeckController@show')->name('decks.show');

Route::get('decks/{deck}/cards/create', 'DeckCardController@create')->name('decks.cards.create');
Route::post('decks/{deck}/cards', 'DeckCardController@store')->name('decks.cards.store');
