<?php

use Illuminate\Http\Request;


Route::middleware('auth:api')->get('/user', function (Request $request) {

    return $request->user();
});
//Route::middleware('api')->post('/login','Auth.LoginController' );
Route::middleware('api')->post('/register','Auth.RegisterController@create' );
Route::middleware('api')->get('/faq-contact', 'FaqController@index');
Route::middleware('api')->get('/goodies', 'ProduitController@index');
Route::middleware('api')->get('/goodies/{id}', 'ProduitController@show');
Route::middleware('api')->get('/compte', 'ProfileController@index');