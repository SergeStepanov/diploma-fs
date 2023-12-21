<?php

use App\Http\Controllers\AdminPageController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\HallController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\MovieController;
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

Route::get('/admin/login', [LoginController::class, 'index'])->name('login');
Route::post('/admin/login', [LoginController::class, 'login']);

Route::middleware('auth')->group(function () {
    Route::post('/loguot', [LoginController::class, 'loguot'])->name('logout');

    Route::get('/admin', [AdminPageController::class, 'index'])->name('admin');

    // Route::post('/admin', [MovieController::class, 'store'])->name('movie.add');
    // Route::post('/admin', [HallController::class, 'store'])->name('hall.add');
});
