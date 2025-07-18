<?php

use App\Http\Controllers\Auth\FacebookAuthController;
use App\Http\Controllers\Auth\GoogleAuthController;
use App\Http\Controllers\ProductController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

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

Route::view('/login','auth.login')->name('auth.login');
Route::view('/register','auth.register')->name('auth.register');

Route::get('/auth/google', [GoogleAuthController::class, 'redirect'])->name('google.redirect');
Route::get('/auth/google/callback', [GoogleAuthController::class, 'callback'])->name('google.callback');

Route::get('/auth/facebook',[FacebookAuthController::class,'redirect'])->name('facebook.redirect');
Route::get('/auth/facebook/callback',[FacebookAuthController::class,'callback'])->name('facebook.callback');



});


Route::middleware('auth')->group( function(){



Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();

    return redirect('/login'); 
})->middleware(['signed'])->name('verification.verify');


Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();

    return back()->with('message', 'Verification link sent!');

})->middleware(['throttle:6,1'])->name('verification.send');


Route::view('/dashboard','users.dashboard')->name('users.dashboard');

Route::post('/logout', function () {
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect('/login');
    })->name('users.logout');

});


Route::middleware(['auth', 'role:admin'])->group( function(){

Route::view('/admin/dashboard','admin.dashboard')->name('admin.dashboard');

Route::post('/admin/logout', function () {
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect('/login');
    })->name('admin.logout');

});


