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
Route::get('/apple', 'PageController@apple')->name('/apple');
Route::get('/asus', 'PageController@asus')->name('/asus');
Route::get('/huawei', 'PageController@huawei')->name('/huawei');
Route::get('/nokia', 'PageController@nokia')->name('/nokia');
Route::get('/samsung', 'PageController@samsung')->name('/samsung');

//Route::get('/about', 'PageController@about')->name('about');
//Route::get('/brand', 'PageController@brand')->name('brand');
//Route::get('/basket/', 'PageController@basket')->name('basket');
//Route::get('/save_basket/{id}', 'PageController@saveBasket')->name('save_basket');
//Route::get('/contact', 'PageController@contact')->name('contact');
//Route::get('/entry', 'PageController@entry')->name('entry');
Route::get('/action', 'PageController@action')->name('action');
Route::get('/second_action', 'PageController@second_action')->name('second_action');
//Route::get('/category/{id}', 'PageController@category')->name('category');
//Route::get('/custom', 'PageController@custom')->name('custom');
//Route::get('/thanks', 'PageController@thanks')->name('thanks');




Route::get('/admin_category', 'Admin\CategoryController@category')->name('admin_category');
Route::get('/category_form', 'Admin\CategoryController@category_form')->name('category_form');
Route::post('/save_category', 'Admin\CategoryController@saveCategory')->name('save_category');
Route::get('/category_edit/{id}', 'Admin\CategoryController@edit_category')->name('edit_category');
Route::get('/category_delete/{id}', 'Admin\CategoryController@delete_category')->name('delete_category');

Route::get('/admin_asus', 'Admin\AsusController@asus')->name('admin_asus');
Route::get('/asus_form', 'Admin\AsusController@asus_form')->name('asus_form');
Route::post('/save_asus', 'Admin\AsusController@saveAsus')->name('save_asus');
Route::get('/asus_edit/{id}', 'Admin\AsusController@edit_aasus')->name('edit_asus');
Route::get('/asus_delete/{id}', 'Admin\AsusController@delete_asus')->name('delete_asus');

Route::get('/admin_apple', 'Admin\AppleController@apple')->name('admin_apple');
Route::get('/apple_form', 'Admin\AppleController@apple_form')->name('apple_form');
Route::post('/save_apple', 'Admin\AppleController@saveApple')->name('save_apple');
Route::get('/apple_edit/{id}', 'Admin\AppleController@edit_apple')->name('edit_apple');
Route::get('/apple_delete/{id}', 'Admin\AppleController@delete_apple')->name('delete_apple');

Route::get('/admin_huawei', 'Admin\HuaweiController@huawei')->name('admin_huawei');
Route::get('/huawei_form', 'Admin\HuaweiController@huawei_form')->name('huawei_form');
Route::post('/save_huawei', 'Admin\HuaweiController@saveHuawei')->name('save_huawei');
Route::get('/huawei_edit/{id}', 'Admin\HuaweiController@edit_huawei')->name('edit_huawei');
Route::get('/huawei_delete/{id}', 'Admin\HuaweiController@delete_huawei')->name('delete_huawei');

Route::get('/admin_nokia', 'Admin\NokiaController@nokia')->name('admin_nokia');
Route::get('/nokia_form', 'Admin\NokiaController@nokia_form')->name('nokia_form');
Route::post('/save_nokia', 'Admin\NokiaController@saveNokia')->name('save_nokia');
Route::get('/nokia_edit/{id}', 'Admin\NokiaController@edit_nokia')->name('edit_nokia');
Route::get('/nokia_delete/{id}', 'Admin\NokiaController@delete_nokia')->name('delete_nokia');

Route::get('/admin_samsung', 'Admin\SamsungController@samsung')->name('admin_samsung');
Route::get('/samsung_form', 'Admin\SamsungController@samsung_form')->name('samsung_form');
Route::post('/save_samsung', 'Admin\SamsungController@saveSamsung')->name('save_samsung');
Route::get('/samsung_edit/{id}', 'Admin\SamsungController@edit_samsung')->name('edit_samsung');
Route::get('/samsung_delete/{id}', 'Admin\SamsungController@delete_samsung')->name('delete_samsung');



Auth::routes();

Route::get('/', 'HomeController@index')->name('/');
