<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\WishlistController;
use App\Http\Controllers\ErrorController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\ComingSoonController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\EmptyCartController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\MyAccountController;
use App\Http\Controllers\PrivacyPolicyController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\ProductDetailController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;



// Route::get('/', function () {
//     return view('index');
// });
Route::get('/', [HomeController::class, 'view'])->name('index');



// Route::get('/login', function () {
//     return view('login');
// });
Route::get('/login', [LoginController::class, 'view'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.submit');

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/empty-wishlist', function () {
    return view('empty-wishlist');
})->name('wishlist.empty');

Route::get('/empty-cart', function () {
    return view('empty-cart');
});


Route::post('/cart/add', [CartController::class, 'addCart'])->name('addCart');
Route::get('/cart', [CartController::class, 'view'])->name('cart.view');

Route::get('/wishlist', [WishlistController::class, 'view'])->name('wishlist.view');
Route::post('/wishlist/add/{productId}', [WishlistController::class, 'store'])->name('wishlist.add');
Route::delete('/wishlist/remove/{productId}', [WishlistController::class, 'destroy'])->name('wishlist.remove');


// Route::get('/404', function () {
//     return view('404');
// });
Route::get('/404', [ErrorController::class, 'view']);

// Route::get('/about', function () {
//     return view('about');
// });
Route::get('/about', [AboutController::class, 'view']);

// Route::get('/cart', function () {
//     return view('cart');
// });
Route::get('/cart', [CartController::class, 'view']);

// Route::get('/checkout', function () {
//     return view('checkout');
// });
Route::get('/checkout', [CheckoutController::class, 'view']);

// Route::get('/coming-soon', function () {
//     return view('coming-soon');
// });
Route::get('/coming-soon', [ComingSoonController::class, 'view']);

// Route::get('/contact', function () {
//     return view('contact');
// });
Route::get('/contact', [ContactController::class, 'view']);

// Route::get('/empty-cart', function () {
//     return view('empty-cart');
// });
Route::get('/empty-cart', [EmptyCartController::class, 'view'])->name('empty.cart');

// Route::get('/faq', function () {
//     return view('faq');
// });
Route::get('/faq', [FaqController::class, 'view']);

// Route::get('/my-account', function () {
//     return view('my-account');
// });
Route::get('/my-account', [MyAccountController::class, 'accountDetails']);

// Route::get('/privacy-policy', function () {
//     return view('privacy-policy');
// });
Route::get('/privacy-policy', [PrivacyPolicyController::class, 'view']);

// Route::get('/shop', function () {
//     return view('shop-4-column');
// });
Route::get('/shop', [ShopController::class, 'view'])->name('products.index');

// Route::get('/shop/{animal}/{category?}', 'ShopController@showCategory');


// Route::get('/shop/{animal}/{category?}', [ShopController::class, 'showCategory'])->name('shop.category');
// Route::get('/shop', 'ProductController@index')->name('products.index');


// Route::get('/single-product-variable', function () {
//     return view('single-product-variable');
// });
Route::get('/shop/product-detail-{productId}', [ProductDetailController::class, 'view'])->name('product.detail');
Route::get('/shop/{animal}/{category?}', [ShopController::class, 'showCategory'])->name('shop.category');

Route::get('/cart', [CartController::class,'view']);
Route::post('/getShipping', [CheckoutController::class,'getShipping']) ->name('getShipping');
Route::post('/checkout', [CheckoutController::class,'addOrder'] )->name('addOrder');
Route::post('/cart/delete', [CartController::class, 'deleteCart'])->name('deleteCart');

// Route::get('/single-product', function () {
//     return view('single-product');
// });

// Route::get('/register', function () {
//     return view('register');
// });
Route::get('/register', [RegisterController::class, 'view']);
Route::post('/register', [RegisterController::class, 'register'])->name('register.submit');
Route::post('/cart', [CartController::class,'updateCart'])->name('updateCart');


use Illuminate\Support\Facades\DB;

Route::get('/test-db', function () {
    try {
        DB::connection()->getPdo();
        return "Koneksi ke database berhasil.";
    } catch (\Exception $e) {
        return "Tidak bisa terkoneksi ke database. Error: " . $e->getMessage();
    }
});
Route::post('/cart/delete', [CartController::class, 'deleteCart'])->name('deleteCart');
Route::post('/cart/add', [CartController::class, 'addCart'])->name('addCart');
Route::post('/cart/delItem', [CartController::class, 'deleteItem'])->name('deleteItem');