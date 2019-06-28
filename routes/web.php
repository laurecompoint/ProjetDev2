<?php

//redirection
Route::group(['middleware' => ['auth']], function (){

    Route::get('/creation-mugs', 'AppController@index')->where('any', '.*');
    Route::get('/creation-calendrier', 'AppController@index')->where('any', '.*');
    Route::get('/creation-usb', 'AppController@index')->where('any', '.*');
    Route::get('/creation-cadrephoto', 'AppController@index')->where('any', '.*');
    Route::get('/compte', 'AppController@index')->where('any', '.*');
    Route::get('/panier', 'AppController@index')->where('any', '.*');
    Route::get('/panieruser', 'Front\OrderController@panieruser');
    Route::post('/creation-mugs', 'Front\OrderController@create');
    Route::post('/creation-cadrephoto', 'Front\OrderController@create');
    Route::post('/creation-usb', 'Front\OrderController@create');
    Route::post('/order-delete/{id}', 'Front\OrderController@destroy');

    //Admin route
    Route::get('/faqmodif{id}', 'Admin\AdminFaqController@edit')->name('faqmodif{id}');
    Route::post('/faqmodif', 'Admin\AdminFaqController@update')->name('faq_update.update');
    Route::get('/usermodif{id}', 'Admin\AdminUserController@edit')->name('usermodif{id}');
    Route::post('/usermodif', 'Admin\AdminUserController@update')->name('user_update.update');
    Route::get('/produitmodif{id}', 'Admin\AdminProduitController@edit')->name('usermodif{id}');
    Route::post('/produitmodif', 'Admin\AdminProduitController@update')->name('produit_update.update');
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
    //Route::post('/profile-modif', 'User\ProfileController@update');
});
Route::get('profile', 'User\ProfileController@show')->middleware('auth')->name('profile.show');
Route::post('profile', 'User\ProfileController@update')->middleware('auth')->name('profile.update');
Route::get('/getUser', 'AppController@getUser');

//route app
Route::get('/{any}', 'AppController@index')->where('any', '.*');

//route auth laravel
Auth::routes();
