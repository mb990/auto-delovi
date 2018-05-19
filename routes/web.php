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

Route::get('/', 'PagesController@index');
Route::get('/o-nama', 'PagesController@about');
Route::get('/usluge', 'PagesController@services');
Route::get('/proizvodi', 'PagesController@products');
Route::get('/kontakt', 'PagesController@contact');
Route::post('/kontakt/posalji', 'MessagesController@submit');