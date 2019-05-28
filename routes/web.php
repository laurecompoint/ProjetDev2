<?php

//Route::get('compte', 'AppController@index')->where('any', '.*')->middleware('auth');
Route::get('/{any}', 'AppController@index')->where('any', '.*');
Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

