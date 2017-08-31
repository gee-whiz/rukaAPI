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

 

 Route::get('/', 'UsersController@index');

Route::get('foo', function () {
    return 'Hello World';
});


Route::post('user', 'RegisterUserCtr@register');



Route::get('user', 'UsersController@index');
Route::get('user/{id}', 'UsersController@show');
Route::post('user', 'UsersController@create');
Route::put('user/{Users}', 'UserController@update');
Route::delete('user/{Users}', 'UsersController@delete');
