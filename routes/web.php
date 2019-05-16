<?php
Auth::routes();
Route::get('compte', 'AppController@index')->where('any', '.*')->middleware('auth');
Route::get('/{any}', 'AppController@index')->where('any', '.*');


//Route::get('/home', 'HomeController@index')->name('home');

