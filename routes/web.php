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
    $categories = \App\category::withCount('books')->get();
    return view('welcome')->with('categories', $categories);
});

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/books', 'BookController@index')->name('books');

Route::get('/create-book', 'BookController@create')->name('create-book');
Route::post('/create-book-post', 'BookController@store')->name('create-book-post');

Route::get('/categories', 'CategoryController@index')->name('categories');
Route::get('/categories/create', 'CategoryController@create')->name('create-category');
Route::post('/categories/create', 'CategoryController@store')->name('save-category');

Route::get('/suppliers', 'SupplierController@index')->name('suppliers');
Route::get('/suppliers/create', 'SupplierController@create')->name('create-supplier');
Route::post('/supplier/create', 'SupplierController@store')->name('save-supplier');

Route::get('/orders', 'OrderController@index')->name('orders');
Route::get('/order/status/{id}', 'OrderController@set_status')->name('set_status');
Route::get('/orders/place', 'OrderController@create')->name('create_order')->middleware('auth');
Route::post('/orders/place', 'OrderController@store')->name('store_order');

Route::get('/aboutus', 'AboutUs@index')->name('about_us');
Route::get('/contact', 'Contact@index')->name('contact');

Route::patch('update-cart', 'CartController@update');
Route::delete('remove-from-cart', 'CartController@remove');
Route::get('/cart', 'CartController@cart')->name('view_cart');
Route::get('/add-to-cart/{id}', 'CartController@addToCart')->name('add_to_cart');

Route::post('/update-profile', 'HomeController@store')->name('update-profile');
