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
// Route::get('/login', 'Auth\LoginController@index' )->name('login.form');
Route::post('/login', 'Auth\LoginController@loginPost')->name('login');
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');
// Route::get('/register', 'Auth\RegisterController@index');
// Route::post('/register', 'Auth\RegisterController@store');

Route::get('/category', function () {
    return view('category');
});
// Route::get('/checkout', function () {
//     return view('checkout');
// });
Route::get('/confirmation', function () {
    return view('confirmation');
})->name('confirmation');
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


Route::get('import', 'ExcelController@importExportView')->middleware('is_admin')
            ->name('import.show');
Route::post('import', 'ExcelController@import')->name('import');

Route::get('/shop', 'ShopController@index')->name('shop.index');
Route::get('/shop/{product}', 'ShopController@show')->name('shop.show');

Route::get('/cart', 'CartController@index')
->middleware('not_admin')
->name('cart.index');
Route::post('/cart', 'CartController@store')
->middleware('not_admin')
->name('cart.store');
Route::delete('/cart/{item}', 'CartController@destroy')
->middleware('not_admin')
->name('cart.destroy');
Route::patch('/cart/{item}', 'CartController@update')
->middleware('not_admin')
->name('cart.update');
// Route::get('/confirmation', 'CartController@update')->name('cart.update');

Route::get('/checkout', 'CheckoutController@index')
->middleware('not_admin')
->name('checkout.index');
Route::post('/checkout', 'CheckoutController@store')
->middleware('not_admin')
->name('checkout.store');

Route::post('/checkout/paid', 'CheckoutController@addTransaction')
->middleware('not_admin')
->name('checkout.addTransaction');

Route::get('/shipping', 'ShippingController@index')->name('shipping.index');
Route::get('/checkout/get_province', 'CheckoutController@get_province')->name('checkout.get_province');
Route::get('/checkout/get_city/', 'CheckoutController@get_city')->name('checkout.get_city');
Route::get('/checkout/get_ongkir', 'CheckoutController@get_ongkir')->name('checkout.get_ongkir');
Route::get('/empty', function(){Cart::destroy();});
Route::get('/akun-saya', 'UsersController@edit')->name('users.edit');

Auth::routes();

Route::get('/shop', 'ShopController@index')->name('shop.index');
Route::get('/shop/{categories}', 'ShopController@categories')->name('shop.categories');

Route::get('/order', 'OrderController@index')->middleware('auth')
            ->name('order.index');
Route::get('/order/{order}', 'OrderController@show')->middleware('auth')
            ->name('order.show');

Route::get('/product/{product}', 'ProductController@show')
->middleware('is_admin')
->name('product.show');

Route::get('/product/add', 'ProductController@store')
->middleware('is_admin')
->name('product.store');

Route::post('/product/{product}', 'ProductController@update')
->middleware('is_admin')
->name('product.update');

Route::post('/order/{product}', 'OrderController@update')
->middleware('is_admin')
->name('order.update');

Route::post('/order/status/{product}', 'OrderController@updateStatus')
->middleware('is_admin')
->name('order.updateStatus');

Route::post('/order/transaction/{product}', 'OrderController@addTransactionOnly')
->middleware('is_customer')
->name('order.transaction');

Route::get('/invoice/{order}', 'InvoiceController@show')
->middleware('auth')
->name('invoice.show');

Route::get('/mailable', function(){
    $order = App\Order::find(1);
    return new App\Mail\EmailOrder($order);
});
