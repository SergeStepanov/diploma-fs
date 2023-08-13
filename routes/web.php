<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
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

// Route::get('/test', function () {
//     return view('admin.register');
// })->name('test');


Route::get('/admin/register', [RegisterController::class, 'index'])->name('register');
Route::post('/admin/register', [RegisterController::class, 'store']);

Route::get('/admin/login', [LoginController::class, 'index'])->name('login');
Route::post('/admin/login', [LoginController::class, 'store']);
Route::post('/loguot', [LoginController::class, 'destroy'])->middleware('auth')->name('logout');


Route::middleware('auth')->group(function () {
    Route::get('/admin', function () {
        return view('admin.index');
    })->name('admin');
});
