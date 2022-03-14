<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KarirController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
})->name('home');
Route::get('/tentang', function () {
    return view('tentang');
})->name('tentang');
Route::get('/layanan', function () {
    return view('layanan');
})->name('layanan');
Route::get('/kariru', function () {
    return view('kariru');
})->name('kariru');
Route::get('/kontak', [HomeController::class, 'indexKontak'])->name('kontak');
Route::post('/post', [HomeController::class, 'postKontak'])->name('post');

// Login
Route::get('/login', [AuthController::class,'index'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'login'])->name('login');

// Logout
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware('auth')->group(function() {

    // Dashboard Admin
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');

    // Data User
    Route::get('/data-user', [DashboardController::class, 'userCount'])->name('userCount')->middleware('auth');

    // Karir
    Route::resource('karir', KarirController::class);

});


