<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

 


Route::get('foo', function () {
    return 'Hello World';
});

/*
|--------------------------------------------------------------------------
| Users Routes
|--------------------------------------------------------------------------
*/

Route::get('/', 'UsersController@index');
Route::post('user', 'UsersController@create');
Route::get('user', 'UsersController@index');
Route::post('login', 'LoginController@login');
Route::get('user/{id}', 'UsersController@show');


Route::put('user/{Users}', 'UserController@update');
Route::delete('user/{Users}', 'UsersController@delete');

/*
|--------------------------------------------------------------------------
| Services Routes
|--------------------------------------------------------------------------
*/

Route::post('services', 'ServicesController@create');
Route::get('services', 'ServicesController@index');// Route::delete('services/{id}', 'ServicesController@show');
// Route::delete('services/delete/{id}', 'ServicesController@delete');
// Route::delete('services/update/{id}', 'ServicesController@update');

