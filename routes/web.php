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

Route::get('/admin', function () {
    return view('admin.index');
})->name('admin')->middleware('auth');

Route::get('/admin/login', function () {
    return view('admin.login');
})->name('login');

Route::get('/admin/register', function () {
    return view('admin.register');
})->name('register');

// Route::get('/test', function () {
//     return view('admin.register');
// })->name('test');

// Route::get('login',[, 'index'])->name('login');
// Route::post('login' [, 'store']);

// // Route::get('loguot')->name('logout'); // ?????????

// Route::get('register',[, 'index'])->name('register');
// Route::post('register' [, 'store']);


// Route::middleware('auth')->group(function() {
//     Route::get();
// });
