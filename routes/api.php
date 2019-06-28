<?php

Route::middleware('api')->get('/faq-contact', 'Front\FaqController@index');
Route::middleware('api')->get('/goodies', 'Front\ProduitController@index');
Route::middleware('api')->get('/goodies/{id}', 'Front\ProduitController@show');
Route::middleware('api')->get('/admim-faqs', 'Admin\AdminFaqController@index');
Route::middleware('api')->get('/admin-produit', 'Admin\AdminProduitController@index');
Route::middleware('api')->get('/admin-user', 'Admin\AdminUserController@index');
Route::middleware('api')->post('/admin-produit/{id}', 'Admin\AdminProduitController@destroy');
Route::middleware('api')->post('/admim-faq/{id}', 'Admin\AdminFaqController@destroy');
Route::middleware('api')->post('/admin-user/{id}', 'Admin\AdminUserController@destroy');
Route::middleware('api')->post('/faqs-new', 'Admin\AdminFaqController@create');
Route::middleware('api')->post('/produits-new', 'Admin\AdminProduitController@create_admin');
Route::middleware('api')->post('/users-new', 'Admin\AdminUserController@create');
Route::middleware('api')->get('/admim-faq', 'Admin\AdminFaqController@nb');
Route::middleware('api')->get('/admin-users', 'Admin\AdminUserController@nb');
Route::middleware('api')->get('/admin-produits', 'Admin\AdminProduitController@nb');