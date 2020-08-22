<?php

use Illuminate\Support\Facades\Route;

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


Route::get('/', 'HomeController@getIndex')->name('home.index');

Route::get('/news', 'NewsController@getIndex')->name('news.index');
Route::get('/news/new', 'NewsController@getCreate')->name('news.new');
Route::get('/news/edit/{id}', 'NewsController@getEdit')->name('news.edit');
Route::get('/news/{id}', 'NewsController@getDetail')->name('news.edit');
Route::post('/news/save', 'NewsController@postSave')->name('news.save');
