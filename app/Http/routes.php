<?php

Route::get('/', function () {
    return view('/');
});
Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

//blog
Route::get('artikel','BlogController@index');
Route::get('artikel/create','BlogController@create');
Route::post('artikel/store','BlogController@store');
Route::get('artikel/edit','BlogController@edit');
Route::get('artikel/edit/{id}','BlogController@edit');
Route::get('artikel/delete/{id}','BlogController@destroy');
Route::post('artikel/update','BlogController@update');

//User
Route::get('user','UserController@index');
Route::get('auth/register','UserController@create');

//komentar
Route::post('store','KomentarController@store');

//front
Route::get('/','FrontController@index');
Route::get('/artikel/{id}','FrontController@artikel');



