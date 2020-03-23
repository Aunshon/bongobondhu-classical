<?php

// Main site url
Route::get('/', 'FrontEndController@welcome')->name('welcome');

Auth::routes();

// Dashboard home
Route::get('/home', 'HomeController@index')->name('home');

// Article Front End
Route::get('/Read/More', 'FrontEndController@readMore')->name('readMore');
Route::get('/article/details/{id}', 'FrontEndController@articledetails')->name('articledetails');


// Aticle Dashboard
Route::get('/articleSettings', 'HomeController@articleSettings')->name('articleSettings');
Route::post('/savearticle', 'HomeController@savearticle')->name('savearticle');
Route::get('/delete/article/{id}', 'HomeController@deletearticle')->name('deletearticle');

// Banner Dashboard
Route::get('/bannerSettings', 'HomeController@bannerSettings')->name('bannerSettings');
Route::post('/saveBanner', 'HomeController@saveBanner')->name('saveBanner');
Route::get('/active/banner/{id}', 'HomeController@activebanner');
Route::get('/banner/delete/{id}', 'HomeController@bannerdelete');


// Fitst page Text
Route::get('/firstPageText', 'HomeController@firstPageText')->name('firstPageText');
Route::post('/updateFirstPage', 'HomeController@updateFirstPage')->name('updateFirstPage');


// Logo Dashboard
Route::get('/logosettings', 'HomeController@logosettings')->name('logosettings');
Route::post('/saveLogo', 'HomeController@saveLogo')->name('saveLogo');
Route::get('/active/logo/{id}', 'HomeController@activelogo');
Route::get('/logo/delete/{id}', 'HomeController@logodelete');


// History Front End
Route::get('/bongobondhu/history', 'FrontEndController@history')->name('history');

Route::get('/bongobondhu/own/History', 'FrontEndController@mujibHistory')->name('mujibHistory');
Route::get('/bongobondhu/Life', 'FrontEndController@mujibLife')->name('mujibLife');
Route::get('/bongobondhu/Speech', 'FrontEndController@mujibSpeech')->name('mujibSpeech');
Route::get('/bongobondhu/Publication', 'FrontEndController@mujibPublication')->name('mujibPublication');


// Know More FrontEnd
Route::get('/bongobondhu/know/more', 'FrontEndController@knowmore')->name('knowmore');



// History Dashboard
Route::get('/historySettings', 'HomeController@historySettings')->name('historySettings');
Route::post('/saveHistory', 'HomeController@saveHistory')->name('saveHistory');


Route::get('/dashboard/bongobondhu/own/History', 'HomeController@mujibHistorydash')->name('mujibHistorydash');
Route::post('/savemijibhistory', 'HomeController@savemijibhistory')->name('savemijibhistory');
Route::get('/delete_mujibHistorydash/delete/{id}', 'HomeController@delete_mujibHistorydash');

Route::get('/dashboard/bongobondhu/Life', 'HomeController@mujibLifedash')->name('mujibLifedash');
Route::post('/savemujib_Life', 'HomeController@savemujib_Life')->name('savemujib_Life');
Route::get('/delete_mujibLifedash/delete/{id}', 'HomeController@delete_mujibLifedash');

Route::get('/dashboard/bongobondhu/Speech', 'HomeController@mujibSpeechdash')->name('mujibSpeechdash');
Route::post('/savemujib_Speech', 'HomeController@savemujib_Speech')->name('savemujib_Speech');
Route::get('/delete_mujibSpeechdash/delete/{id}', 'HomeController@delete_mujibSpeechdash');

Route::get('/dashboard/bongobondhu/Publication', 'HomeController@mujibPublicationdash')->name('mujibPublicationdash');
Route::post('/savemujib_Publication', 'HomeController@savemujib_Publication')->name('savemujib_Publication');
Route::get('/delete_mujibPublicationdash/delete/{id}', 'HomeController@delete_mujibPublicationdash');

Route::get('/dashboard/bongobondhu/know/more', 'HomeController@knowmoredash')->name('knowmoredash');
Route::post('/save/know/more', 'HomeController@saveknowmore')->name('saveknowmore');
Route::get('/know/more/delete/{id}', 'HomeController@deletesaveknowmore');


Route::get('/allusers', 'HomeController@allusers')->name('allusers')->middleware('UrlRes');
Route::get('/deactive/user/{id}', 'HomeController@deactiveuser')->middleware('UrlRes');
Route::get('/active/user/{id}', 'HomeController@activeuser')->middleware('UrlRes');
Route::get('/remove/user/{id}', 'HomeController@removeuser')->middleware('UrlRes');
