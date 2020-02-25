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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/articleSettings', 'HomeController@articleSettings')->name('articleSettings');
Route::post('/savearticle', 'HomeController@savearticle')->name('savearticle');
Route::get('/delete/article/{id}', 'HomeController@deletearticle')->name('deletearticle');

Route::get('/bannerSettings', 'HomeController@bannerSettings')->name('bannerSettings');
Route::post('/savebanner', 'HomeController@savebanner')->name('savebanner');



Route::get('/Read/More', 'FrontEndController@readMore')->name('readMore');
Route::get('/article/details/{id}', 'FrontEndController@articledetails')->name('articledetails');
