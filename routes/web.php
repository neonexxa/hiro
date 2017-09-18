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

Route::get('/', function () {
    return redirect()->guest('home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/rule', 'HomeController@rule')->name('rule');
Route::get('/theme', 'HomeController@theme')->name('theme');
Route::get('/prize', 'HomeController@prize')->name('prize');
Route::get('/faq', 'HomeController@faq')->name('faq');
