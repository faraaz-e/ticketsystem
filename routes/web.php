<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('home');
// });
 
Route::get('/', 'AdminController@index');
Route::get('/home', 'HomeController@index');

 //loading controller@function-name on https://127.0.0.1:8000/

Route::get('/user/create', 'UserController@create');
Route::post('/user/store', 'UserController@store');



Auth::routes();

Route::get('/user', 'HomeController@index');
