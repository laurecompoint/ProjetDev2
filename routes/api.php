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