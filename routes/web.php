<?php

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

Route::get('/', 'CardController@index')->name('homepage');

Route::get('reports', 'ReportCardController@index')->name('reports.index');

Route::get('cards/{card}/purchase', 'CardsPurchaseController@index')->name('cards.purchase.index');
