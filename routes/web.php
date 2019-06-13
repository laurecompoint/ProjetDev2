<?php
/*
Route::post('/profile-modif', 'HomeController@profile_udapte')->name('profil.update');
Route::get('/compte', 'HomeController@index')->name('compte')->middleware('auth');
Route::get('/profile-modif', 'HomeController@profile')->name('profil')->middleware('auth');
*/

Route::get('/getUser', 'AppController@getUser');
Route::get('/{any}', 'AppController@index')->where('any', '.*');
Auth::routes();



