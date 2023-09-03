<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\HomePageController;
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

Route::get('/', [HomePageController::class, 'index'])->name('home');

// Route::get('/test', function () {
//     return view('admin.register');
// })->name('test');


// Route::get('/admin/register', [RegisterController::class, 'index'])->name('register');
// Route::post('/admin/register', [RegisterController::class, 'store']);

Route::get('/admin/login', [LoginController::class, 'index'])->name('login');
Route::post('/admin/login', [LoginController::class, 'store']);


Route::middleware('auth')->group(function () {
    Route::post('/loguot', [LoginController::class, 'destroy'])->name('logout');

    Route::get('/admin', function () {
        return view('admin.index');
    })->name('admin');
});
