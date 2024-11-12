<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\bankController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ShowController;
use App\Http\Controllers\RedirectController;
use App\Http\Controllers\UserController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/index', [RedirectController::class, 'roleRedirection'])->name('index');
});


Route::get('/bank',[bankController::class,'bank'])->name('bank');
Route::post('/bank-store', [bankController::class, 'bank_store'])->name('bank-store');
Route::get('/product', [AdminController::class, 'product'])->name('product');
Route::get('/dressEdit/{id}',[AdminController::class,'DressEdit'])->name('dressEdit');
Route::get('/dressDel/{id}',[AdminController::class,'dressDel'])->name('dressDel');
Route::post('/product-store', [AdminController::class, 'product_store'])->name('product_store');
// Route::get('/bank',[bankController::class,'bank'])->name('show');
Route::get('/show',[ShowController::class,'allRecord'])->name('show');

// Route::post('/product-detail-edit-store/{u_id}', [AdminController::class, 'product_store'])->name('product-detail-store');
// Route::post('/product-store', [AdminController::class, 'product_store'])->name('product-store');
// Route::get('/user-home', [UserController::class, 'home'])->name('user-home');

Route::get('/home', function () {
    return view('home');
})->middleware(['auth', 'verified'])->name('user-home');




// Route::get('/list', [UserController::class, 'list'])->name('list');
Route::get('/list',[UserController::class,'allRecord'])->name('list');
Route::get('/order',[UserController::class,'allRecord2'])->name('order');
// routes/web.php
Route::get('/wishlist', [UserController::class, 'wishlist'])->name('wishlist');
// routes/web.php
Route::post('/payment', [UserController::class, 'payment_store'])->name('payment');
Route::get('/details/{id}',[ShowController::class,'show'])->name('details2');
Route::get('/wishlist/add/{productId}', [ShowController::class, 'addToWishlist'])->name('wishlist.add');
Route::get('/wishlist', [ShowController::class, 'showWishlist'])->name('wishlist.show');
Route::get('/showOrder', [ShowController::class, 'showOrder'])->name('order.show');
Route::get('/buy/add/{productId}', [ShowController::class, 'addToOrderlist'])->name('order.add');
Route::get('/buy/{productId}', [ShowController::class, 'buy'])->name('buy');


require __DIR__.'/auth.php';
