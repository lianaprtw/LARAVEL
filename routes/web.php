<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\YourCartController;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/profile', function () {
    return view('pages.profile');
});

// Route::get('/catalogue', function () {
//     return view('pages.catalogue');
// });

Route::get('/term-conditions', function () {
    return view('pages.term-conditions');
});

Route::get('/bank-account', function () {
    return view('pages.bank-account');
});

// Route::get('/your-chart', function () {
//     return view('pages.your-chart');
// });

Route::get('/our-video', function () {
    return view('pages.our-video');
});

Route::get('/contact-us', function () {
    return view('pages.contact-us');
});

Route::get('/your-chart', [YourCartController::class, 'index']);

Route::delete('/cart/{id}', [YourCartController::class, 'destroy'])->name('cart.remove');

Route::get('/checkout', function (){
    return view('pages.checkout');
})->name('checkout');

Route::get('/catalogue', [ProductController::class, 'index'])->name('catalogue');

Route::get('/products/{id}', [ProductController::class, 'show'])->name('product.show');