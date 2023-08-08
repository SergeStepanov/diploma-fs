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

Route::get('/', function () {
    return view('home.index');
})->name('home');

// Route::get('login',[])->name('login.index');
// Route::post('login' [])->name('login.store');

// Route::get('register',[])->name('register.index');
// Route::post('register' [])->name('register.store');

// Route::get('loguot')->name('logout'); // ?????????

// Route::middleware('auth')->group(function() {
//     Route::get();
// });
