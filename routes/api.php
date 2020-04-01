<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//Route::resource('Notas', 'NotasController');
//Route::resource('Users','UsersController');

Route::get('notas', 'NotasController@index');
Route::get('notas/{id}', 'NotasController@show');
Route::post('notas', 'NotasController@store');
Route::put('notas/{id}', 'NotasController@update');
Route::delete('notas/{id}', 'NotasController@delete');


Route::get('users', 'NotasController@index');
Route::get('users/{id}', 'NotasController@show');
Route::post('users', 'NotasController@store');
Route::put('users/{id}', 'NotasController@update');
Route::delete('users/{id}', 'NotasController@delete');