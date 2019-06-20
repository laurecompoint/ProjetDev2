<?php
//route web get et post
Route::post('/creation-mugs', 'OrderController@create')->middleware('auth');
Route::post('/creation-cadrephoto', 'OrderController@create')->middleware('auth');
Route::post('/creation-usb', 'OrderController@create')->middleware('auth');
Route::post('/creation-memorie', 'OrderController@create')->middleware('auth');
Route::get('/getUser', 'AppController@getUser');
Route::get('/panieruser', 'OrderController@panieruser')->middleware('auth');
Route::get('/goodies/{id}', 'ProduitController@show');
Route::get('/goodies', 'ProduitController@index');
Route::post('/profile-modif', 'ProfileController@update')->middleware('auth');
Route::get('/faq', 'FaqController@index');
Route::post('/order-delete/{id}', 'OrderController@destroy');

//admin route
Route::get('/faq-admim', 'AdminFaqController@index');
Route::post('/faq-admim/{id}', 'AdminFaqController@destroy');
Route::post('/new-faqs', 'AdminFaqController@create');
Route::get('/produit-admin', 'AdminProduitController@index');
Route::post('/new-produits', 'AdminProduitController@create_admin');
Route::post('/produit-admin/{id}', 'AdminProduitController@destroy');
Route::get('/user-admin', 'AdminUserController@index');
Route::post('/new-users', 'AdminUserController@create');
Route::post('/user-admin/{id}', 'AdminUserController@destroy');


//user not log redirection
Route::get('/creation-mugs', 'AppController@index')->where('any', '.*')->middleware('auth');
Route::get('/creation-calendrier', 'AppController@index')->where('any', '.*')->middleware('auth');
Route::get('/creation-usb', 'AppController@index')->where('any', '.*')->middleware('auth');
Route::get('/creation-memorie', 'AppController@index')->where('any', '.*')->middleware('auth');
Route::get('/creation-cadrephoto', 'AppController@index')->where('any', '.*')->middleware('auth');
Route::get('/compte', 'AppController@index')->where('any', '.*')->middleware('auth');
Route::get('/panier', 'AppController@index')->where('any', '.*')->middleware('auth');

//admin redirection
Route::get('/administration', 'AppController@indexadmin')->where('any', '.*')->middleware('auth');
Route::get('/admin-faqs', 'AppController@indexadmin')->where('any', '.*')->middleware('auth');
Route::get('/admin-faqs', 'AppController@indexadmin')->where('any', '.*')->middleware('auth');
Route::post('/admin-faqs/{id}', 'AppController@indexadmin')->where('any', '.*')->middleware('auth');
Route::post('/faqs-new', 'AppController@indexadmin')->where('any', '.*')->middleware('auth');
Route::get('/admin-produit', 'AppController@indexadmin')->where('any', '.*')->middleware('auth');
Route::post('/produits-new', 'AppController@indexadmin')->where('any', '.*')->middleware('auth');
Route::post('/admin-produit/{id}', 'AppController@indexadmin')->where('any', '.*')->middleware('auth');
Route::get('/admin-user', 'AppController@indexadmin')->where('any', '.*')->middleware('auth');
Route::post('/users-new', 'AppController@indexadmin')->where('any', '.*')->middleware('auth');
Route::post('admin-user/{id}', 'AppController@indexadmin')->where('any', '.*')->middleware('auth');
Route::get('/admin-order', 'AppController@indexadmin')->where('any', '.*')->middleware('auth');

//route app
Route::get('/{any}', 'AppController@index')->where('any', '.*');

//route auth laravel
Auth::routes();
