<?php

use App\Http\Controllers\Auth\GoogleAuthController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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


Route::middleware('guest')->group( function(){

Route::view('/login','auth.login')->name('login');
Route::get('/auth/google', [GoogleAuthController::class, 'redirect'])->name('google.redirect');
Route::get('/auth/google/callback', [GoogleAuthController::class, 'callback'])->name('google.callback');



//product
Route::view('/product','users.product.index')->name('product');
Route::post('/product-store', [ProductController::class, 'store'])->name('product.store');
});


Route::middleware('auth')->group( function(){

Route::view('/dashboard','users.dashboard')->name('users.dashboard');

Route::post('/logout', function () {
    Auth::logout();
    return redirect('/login');
})->name('logout');


});


