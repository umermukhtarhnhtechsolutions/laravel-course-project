<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//admin-panel
Route::get('/admin-login', function () {
    return view('admin.auth.login');
});

Route::get('/admin-forgot-password', function () {
    return view('admin.auth.forgot-password');
});

Route::get('/admin-dashboard', function () {
    return view('admin.pages.dashboard');
});

Route::get('/seller-list', function () {
    return view('admin.pages.seller.index');
});

Route::get('/seller-create', function () {
    return view('admin.pages.seller.add');
});

Route::get('/user-list', function () {
    return view('admin.pages.user.index');
});

Route::get('/user-create', function () {
    return view('admin.pages.user.add');
});

Route::get('/product-list', function () {
    return view('admin.pages.product.index');
});


//seller-panel
Route::get('/seller-login', function () {
    return view('seller.auth.login');
});

Route::get('/seller-signup', function () {
    return view('seller.auth.signup');
});

Route::get('/seller-forgot-password', function () {
    return view('seller.auth.forgot-password');
});

Route::get('/seller-dashboard', function () {
    return view('seller.pages.dashboard');
});

Route::get('/seller-product-list', function () {
    return view('seller.pages.product.index');
});

Route::get('/seller-product-create', function () {
    return view('seller.pages.product.add');
});

//user
Route::get('/user-login', function () {
    return view('user.auth.login');
});

Route::get('/reset-password', function () {
    return view('user.auth.reset');
});

Route::get('/', function () {
    return view('user.pages.index');
});

Route::get('/shop', function () {
    return view('user.pages.shop');
});

Route::get('/shop-detail', function () {
    return view('user.pages.shop_detail');
});

Route::get('/shop-cart', function () {
    return view('user.pages.shop_cart');
});

Route::get('/shop-checkout', function () {
    return view('user.pages.shop_checkout');
});

Route::get('/shop-order-complete', function () {
    return view('user.pages.shop_order_complete');
});

Route::get('/about', function () {
    return view('user.pages.about');
});

Route::get('/contact', function () {
    return view('user.pages.contact');
});

Route::get('/terms', function () {
    return view('user.pages.terms');
});

Route::get('/profile', function () {
    return view('user.pages.profile');
});


Route::get('/account-orders', function () {
    return view('user.pages.account_orders');
});

Route::get('/account-edit-address', function () {
    return view('user.pages.account_edit_address');
});

Route::get('/account-edit', function () {
    return view('user.pages.account_edit');
});
