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

Route::get('/', 'ShopController@index')->name('shop.index');
Route::get('/login', 'Auth\LoginController@index' )->name('login.form');
Route::post('/login', 'Auth\LoginController@loginPost')->name('login');
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');
Route::get('/register', 'Auth\RegisterController@index');
Route::post('/register', 'Auth\RegisterController@store');

Route::get('/category', function () {
    return view('category');
});
// Route::get('/checkout', function () {
//     return view('checkout');
// });
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


Route::get('import', 'ExcelController@importExportView')->middleware('cekstatus');;
Route::post('import', 'ExcelController@import')->name('import')->middleware('cekstatus');;

Route::get('/shop', 'ShopController@index')->name('shop.index');
Route::get('/shop/{product}', 'ShopController@show')->name('shop.show');

Route::get('/cart', 'CartController@index')->name('cart.index');
Route::post('/cart', 'CartController@store')->name('cart.store');
Route::delete('/cart/{item}', 'CartController@destroy')->name('cart.destroy');
Route::patch('/cart/{item}', 'CartController@update')->name('cart.update');
// Route::get('/confirmation', 'CartController@update')->name('cart.update');

Route::get('/checkout', 'CheckoutController@index')->name('checkout.index');
Route::post('/checkout', 'CheckoutController@store')->name('checkout.store');
Route::get('/shipping', 'ShippingController@index')->name('shipping.index');
Route::post('/checkout/get_province', 'CheckoutController@get_province')->name('checkout.get_province');
Route::get('/checkout/get_city/', 'CheckoutController@get_city')->name('checkout.get_city');
Route::get('/checkout/get_ongkir', 'CheckoutController@get_ongkir')->name('checkout.get_ongkir');
Route::get('/empty', function(){Cart::destroy();});
Route::get('/akun-saya', 'UsersController@edit')->name('users.edit');

Auth::routes();

Route::get('/shop', 'ShopController@index')->name('shop.index');