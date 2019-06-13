<?php

use Illuminate\Http\Request;


Route::middleware('api')->get('/goodies', 'ProduitController@index');
Route::middleware('api')->get('/goodies/{id}', 'ProduitController@show');

Route::middleware('api')->get('/', 'ProfileController@index');

Route::middleware('api')->get('/compte', 'ProfileController@index');
Route::middleware('api')->get('/faq-contact', 'FaqController@index');

Route::middleware('api')->post('/creation-mugs', 'OrderController@create');
Route::middleware('api')->post('/creation-cadrephoto', 'OrderController@create');

//Admin routes
//faq
Route::middleware('api')->get('/admin-faqs', 'AdminFaqController@index');
Route::middleware('api')->post('/admin-faqs/{id}', 'AdminFaqController@destroy');
Route::middleware('api')->get('/faqs-modif/{id}', 'AdminFaqController@edit');
Route::middleware('api')->post('/faqs-new', 'AdminFaqController@create');
//produits
Route::middleware('api')->get('/admin-produit', 'AdminProduitController@index');
Route::middleware('api')->post('/produits-new', 'AdminProduitController@create_admin');
Route::middleware('api')->post('/admin-produit/{id}', 'AdminUserController@destroy');
//user
Route::middleware('api')->get('/admin-user', 'AdminUserController@index');
Route::middleware('api')->post('/users-new', 'AdminUserController@create');
Route::middleware('api')->post('/admin-user/{id}', 'AdminUserController@destroy');

Route::middleware('api')->get('/admin-order', 'AdminOrderController@index');
Route::middleware('api')->post('/orders-new', 'AdminOrderController@create');
Route::middleware('api')->post('/admin-order/{id}', 'AdminOrderController@destroy');