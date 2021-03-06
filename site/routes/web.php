<?php

use Illuminate\Support\Facades\App;
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

Route::name('webhooks.mollie')->any('webhooks/mollie', 'WebHookController@handle');

    Route::get('/', 'HomeController@getIndex')->name('home.index');
    Route::get('/about', 'HomeController@getAbout')->name('about.index');
    Route::get('/privacypolicy', 'HomeController@getPrivacyPolicy')->name('privacypolicy.index');

    Route::get('/news', 'NewsController@getIndex')->name('news.index');
    Route::get('/news/new', 'NewsController@getCreate')->name('news.new');
    Route::get('/news/delete/{id}', 'NewsController@getDelete')->name('news.delete');
    Route::get('/news/edit/{blog}', 'NewsController@getEdit')->name('news.edit');
    Route::get('/news/{blog}', 'NewsController@getDetail')->name('news.detail');
    Route::post('/news/save', 'NewsController@postSave')->name('news.save');

    Route::get('/memberships', 'MembershipController@getIndex')->name('memberships.index');
    Route::get('/memberships/new', 'MembershipController@getCreate')->name('memberships.new');
    Route::get('/memberships/delete/{id}', 'MembershipController@getDelete')->name('memberships.delete');
    Route::get('/memberships/edit/{membership}', 'MembershipController@getEdit')->name('memberships.edit');
    Route::post('/memberships/save', 'MembershipController@postSave')->name('memberships.save');

    Route::get('/memberships/pay/{id}', 'MembershipController@makePayement')->name('memberships.pay');
    Route::get('/memberships/succes', 'MembershipController@getSucces')->name('memberships.success');

    Route::get('/contact', 'MailController@getMail')->name('contact');
    Route::post('/contact/save', 'MailController@postMail')->name('mail.save');
    Route::post('/signup/save', 'MailController@postSignup')->name('signup.save');

    Auth::routes(['register' => false]);
    Route::get('users/new', 'UserController@getCreate')->name('register');
    Route::post('users/new/save', 'UserController@postSave')->name('register.save');

    Route::get('/backoffice', 'BackofficeController@getIndex')->name('backoffice.index');
