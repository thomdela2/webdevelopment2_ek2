<?php

use Illuminate\Support\Facades\App;
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
Route::get('/news/delete/{id}', 'NewsController@getDelete')->name('news.delete');
Route::get('/news/edit/{blog}', 'NewsController@getEdit')->name('news.edit');
Route::get('/news/{id}', 'NewsController@getDetail')->name('news.detail');
Route::post('/news/save', 'NewsController@postSave')->name('news.save');

Route::get('/memberships', 'MembershipController@getIndex')->name('memberships.index');
Route::get('/memberships/new', 'MembershipController@getCreate')->name('memberships.new');
Route::get('/memberships/delete/{id}', 'MembershipController@getDelete')->name('memberships.delete');
Route::get('/memberships/edit/{id}', 'MembershipController@getEdit')->name('memberships.edit');
Route::get('/memberships/{id}', 'MembershipController@getDetail')->name('memberships.detail');
Route::post('/memberships/save', 'MembershipController@postSave')->name('memberships.save');
