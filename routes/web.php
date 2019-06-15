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

Route::get('/', 'HomeController@index')->name('home');

Route::get('/result', 'ResultController@search_shop')->name('result');

Route::get('/shop', 'ShopController@index')->name('shop');

Route::get('/kiyaku', 'KiyakuController@index')->name('kiyaku');

Route::get('/policy', 'PolicyController@index')->name('policy');

Auth::routes();



Route::get('/auth/{service}', 'OAuthLoginController@getGoogleAuth')->where('service', 'google');
Route::get('/auth/callback/google', 'OAuthLoginController@authGoogleCallback');
Route::get('/auth/logout', 'OAuthLoginController@postLogout');


