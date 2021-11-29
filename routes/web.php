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
//Route::get('/category', 'PageController@category')->name('/category');
Route::get('/category/{slug}', 'PageController@category')->name('/category');
Route::get('/product/{slug}', 'PageController@product')->name('/product');
Route::get('product/{brand}/{category}', 'PageController@productInCatalog')->name('product_in_catalog');


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




Route::get('/admin_brands', 'Admin\BrandsController@brands')->name('admin_brands');
Route::get('/brands_form', 'Admin\BrandsController@brands_form')->name('brands_form');
Route::post('/save_brands', 'Admin\BrandsController@saveBrands')->name('save_brands');
Route::get('/brands_edit/{id}', 'Admin\BrandsController@edit_brands')->name('edit_brands');
Route::get('/brands_delete/{id}', 'Admin\BrandsController@delete_brands')->name('delete_brands');

Route::get('/admin_category', 'Admin\CategoryController@category')->name('admin_category');
Route::get('/category_form', 'Admin\CategoryController@category_form')->name('category_form');
Route::post('/save_category', 'Admin\CategoryController@saveСategory')->name('save_category');
Route::get('/category_edit/{id}', 'Admin\CategoryController@edit_category')->name('edit_category');
Route::get('/category_delete/{id}', 'Admin\CategoryController@delete_category')->name('delete_category');

Route::get('/admin_product', 'Admin\ProductController@product')->name('admin_product');
Route::get('/product_form', 'Admin\ProductController@product_form')->name('product_form');
Route::post('/save_product', 'Admin\ProductController@saveProduct')->name('save_product');
Route::get('/product_edit/{id}', 'Admin\ProductController@edit_product')->name('edit_product');
Route::get('/product_delete/{id}', 'Admin\ProductController@delete_product')->name('delete_product');


Auth::routes();

Route::get('/', 'HomeController@index')->name('/');
