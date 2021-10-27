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

Route::get('/home', 'PageController@home')->name('/home');
Route::get('/about', 'PageController@about')->name('about');
Route::get('/brand', 'PageController@brand')->name('brand');
Route::get('/basket/', 'PageController@basket')->name('basket');
Route::get('/save_basket/{id}', 'PageController@saveBasket')->name('save_basket');
Route::get('/contact', 'PageController@contact')->name('contact');
Route::get('/entry', 'PageController@entry')->name('entry');
Route::get('/action', 'PageController@action')->name('action');
Route::get('/second_action', 'PageController@second_action')->name('second_action');
Route::get('/category/{id}', 'PageController@category')->name('category');
Route::get('/custom', 'PageController@custom')->name('custom');
Route::get('/thanks', 'PageController@thanks')->name('thanks');

Auth::routes();

Route::get('/', 'HomeController@index')->name('/');
