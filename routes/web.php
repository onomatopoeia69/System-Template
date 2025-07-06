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


Route::middleware('guest')->group( function(){

Route::view('/login','auth.login')->name('login');

});


Route::middleware('auth')->group( function(){

Route::view('/dashboard','users.dashboard')->name('users.dashboard');

Route::post('/logout', function () {
    Auth::logout();
    return redirect('/login');
})->name('logout'); 


});


