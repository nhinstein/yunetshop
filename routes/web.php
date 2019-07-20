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
    return view('home');
});
Route::get('/login', function () {
    return view('account/login');
});
Route::get('/register', function () {
    return view('account/registration');
});
Route::post('/register', 'Auth\RegisterController@store');

Route::get('/category', function () {
    return view('category');
});
Route::get('/cart', function () {
    return view('cart');
});
Route::get('/checkout', function () {
    return view('checkout');
});
Route::get('/confirmation', function () {
    return view('confirmation');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/single-product', function () {
    return view('single_product');
});
Route::get('/tracking', function () {
    return view('tracking');
});
Route::get('/element', function () {
    return view('element');
});
