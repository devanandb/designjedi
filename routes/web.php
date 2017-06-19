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


Route::get('/articles', 'ArticlesController@index');
Route::get('/home', 'HomeController@index');
Auth::routes();

Route::get('/category/{category}', 'PagesController@category');
Route::get('/content/{content}', 'PagesController@content');

