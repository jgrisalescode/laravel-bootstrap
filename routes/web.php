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

Route::get('/', 'IndexController@index');
Route::get('/index', 'IndexController@index');
Route::get('/create', 'IndexController@create');
Route::get('/show', 'IndexController@show');
Route::get('/articles', 'IndexController@store');
Route::get('/contact', 'IndexController@contact');
Route::get('/galery', 'IndexController@galery');
