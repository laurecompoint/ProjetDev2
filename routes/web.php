<?php
//route web get et post
Route::post('/creation-mugs', 'Front\OrderController@create')->middleware('auth');
Route::post('/creation-cadrephoto', 'Front\OrderController@create')->middleware('auth');
Route::post('/creation-usb', 'Front\OrderController@create')->middleware('auth');
Route::post('/creation-memorie', 'Front\OrderController@create')->middleware('auth');
Route::get('/getUser', 'AppController@getUser');
Route::get('/panieruser', 'Front\OrderController@panieruser')->middleware('auth');
Route::get('/goodies/{id}', 'Front\ProduitController@show');
Route::get('/goodies', 'Front\ProduitController@index');
Route::post('/profile-modif', 'User\ProfileController@update')->middleware('auth');
Route::get('/faq', 'Front\FaqController@index');
Route::post('/order-delete/{id}', 'Front\OrderController@destroy');

//admin route
Route::get('/faq-admim', 'Admin\AdminFaqController@index');
Route::post('/faq-admim/{id}', 'Admin\AdminFaqController@destroy');
Route::post('/new-faqs', 'Admin\AdminFaqController@create');
Route::get('/produit-admin', 'Admin\AdminProduitController@index');
Route::post('/new-produits', 'Admin\AdminProduitController@create_admin');
Route::post('/produit-admin/{id}', 'Admin\AdminProduitController@destroy');
Route::get('/user-admin', 'Admin\AdminUserController@index');
Route::post('/new-users', 'Admin\AdminUserController@create');
Route::post('/user-admin/{id}', 'Admin\AdminUserController@destroy');


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
