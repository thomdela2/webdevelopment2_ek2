<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return 'Homepage - public';
});

Route::get('/test', function () {
    return 'Newspage - public';
});

Route::get('/test/{id}', function () {
    return 'Newspage detail - public';
});

/* Alle pagina's onder deze Auth-route kunnen pas bereikt worden na registratie-inloggen */
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
