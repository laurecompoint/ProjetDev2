<?php

//admin route
Route::post('/new-faqs', 'Admin\AdminFaqController@create');
Route::post('/new-produits', 'Admin\AdminProduitController@create_admin');
Route::post('/new-users', 'Admin\AdminUserController@create');

//redirection
Route::group(['middleware' => ['auth']], function (){
    Route::get('/creation-mugs', 'AppController@index')->where('any', '.*');
    Route::get('/creation-calendrier', 'AppController@index')->where('any', '.*');
    Route::get('/creation-usb', 'AppController@index')->where('any', '.*');
    Route::get('/creation-cadrephoto', 'AppController@index')->where('any', '.*');
    Route::get('/compte', 'AppController@index')->where('any', '.*');
    Route::get('/panier', 'AppController@index')->where('any', '.*');
    Route::get('/administration', 'AppController@indexadmin')->where('any', '.*');
    Route::get('/admin-faqs', 'AppController@indexadmin')->where('any', '.*');
    Route::get('/admin-faqs', 'AppController@indexadmin')->where('any', '.*');
    Route::post('/admin-faqs/{id}', 'AppController@indexadmin')->where('any', '.*');
    Route::post('/faqs-new', 'AppController@indexadmin')->where('any', '.*');
    Route::get('/admin-produit', 'AppController@indexadmin')->where('any', '.*');
    Route::post('/produits-new', 'AppController@indexadmin')->where('any', '.*');
    Route::post('/admin-produit/{id}', 'AppController@indexadmin')->where('any', '.*');
    Route::get('/admin-user', 'AppController@indexadmin')->where('any', '.*');
    Route::post('/users-new', 'AppController@indexadmin')->where('any', '.*');
    Route::post('admin-user/{id}', 'AppController@indexadmin')->where('any', '.*');
    Route::get('/admin-order', 'AppController@indexadmin')->where('any', '.*');
    Route::post('/profile-modif', 'User\ProfileController@update');
    Route::get('/panieruser', 'Front\OrderController@panieruser');
    Route::post('/creation-mugs', 'Front\OrderController@create');
    Route::post('/creation-cadrephoto', 'Front\OrderController@create');
    Route::post('/creation-usb', 'Front\OrderController@create');
    Route::post('/order-delete/{id}', 'Front\OrderController@destroy');
});

Route::get('/getUser', 'AppController@getUser');

//route app
Route::get('/{any}', 'AppController@index')->where('any', '.*');

//route auth laravel
Auth::routes();
