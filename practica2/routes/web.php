<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComicsController;

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

Route::get('/', 'ComicsController@index');

Route::get('/nuevo-comic', 'ComicsController@create');

Route::post('/nuevo-comic', 'ComicsController@store');

Route::get('/show/{id}', 'ComicsController@show');

Route::get('/show/{id}/edit', 'ComicsController@edit');

Route::post('/show/{id}/edit', 'ComicsController@update');

Route::get('/show/{id}/delete', 'ComicsController@destroy');

