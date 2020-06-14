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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/services', 'PagesController@services');


Route::get('/login', 'PagesController@login');

Route::get('/customer', 'PagesController@customer');
Route::get('/banker', 'PagesController@banker');


Route::resource('/transactions','TransactionsController');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


