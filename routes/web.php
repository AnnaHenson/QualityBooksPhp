<?php

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

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/books', 'BookController@index')->name('books');
Route::get('/create-book', 'BookController@create')->name('create-book');
Route::post('/create-book-post', 'BookController@store')->name('create-book-post');
Route::get('cart', 'BookController@cart');
Route::get('add-to-cart/{id}', 'BooksController@addToCart');

Route::get('/categories', 'CategoryController@index')->name('categories');
Route::get('/categories/create', 'CategoryController@create')->name('create-category');
Route::post('/categories/create', 'CategoryController@store')->name('save-category');

Route::get('/suppliers', 'SupplierController@index')->name('suppliers');
Route::get('/suppliers/create', 'SupplierController@create')->name('create-supplier');
Route::post('/supplier/create', 'SupplierController@store')->name('save-supplier');

Route::get('/orders', 'OrderController@index')->name('orders');
Route::get('/order/status/{id}', 'OrderController@set_status')->name('set_status');

Route::get('/aboutus', 'AboutUs@index')->name('about_us');
Route::get('/contact', 'Contact@index')->name('contact');

