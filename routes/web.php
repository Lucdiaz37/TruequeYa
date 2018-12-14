<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home.home');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/faqs', 'FaqsController@index');

Route::group(['prefix' => 'products'], function () {
    Route::get('', 'ProductController@index');
    Route::get('/create', 'ProductController@create');
    Route::post('/create', 'ProductController@store');
    Route::delete('/delete/{id}', 'ProductController@destroy');
    Route::get('/{id}/edit', 'ProductController@edit');
    Route::patch('/{id}/edit', 'ProductController@update');
    Route::get('/{id}', 'ProductController@show');
});


Route::get('/users', 'UserController@index');

Route::get('/users/{id}', 'UserController@show');

Route::get('/users/{id}/edit', 'UserController@edit');

Route::patch('users/{id}/edit', 'UserController@update');


Route::group(['prefix' => 'backoffice',  'middleware' => ['auth', 'checkrole']], function () {
    Route::get('/', 'BackofficeController@index');
});



Route::get('/category', 'CategoryController@index');

Route::get('/category/{id}', 'CategoryController@show');





