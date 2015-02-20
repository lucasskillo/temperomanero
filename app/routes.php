<?php
Route::group(array('before' => 'auth'), function()
 {

Route::get('home', 'FrontendController@index');

Route::resource('categories', 'CategoryController');
Route::get('categories/delete/{id}', 'CategoryController@destroy');

Route::resource('entries', 'EntryController');
Route::get('entries/delete/{id}', 'EntryController@destroy');

Route::resource('outings', 'OutController');
Route::get('outings/delete/{id}', 'OutController@destroy');

Route::resource('payments', 'PaymentController');
Route::get('payments/delete/{id}', 'PaymentController@destroy');

Route::resource('products', 'ProductController');
Route::get('products/delete/{id}', 'ProductController@destroy');

Route::resource('providers', 'ProviderController');
Route::get('providers/delete/{id}', 'ProviderController@destroy');

Route::resource('receipts', 'ReceiptController');
Route::get('receipts/delete/{id}', 'ReceiptController@destroy');

Route::resource('users', 'UserController');
Route::get('user/delete/{id}', 'UserController@destroy');

});


Route::when('*', 'csrf', array('post'));
 
// Visitante
Route::get('/', array('as' => 'home', 'uses' => 'HomeController@getEntrar' ));
Route::post('login', 'HomeController@postEntrar');
Route::get('sair', 'HomeController@getSair');

