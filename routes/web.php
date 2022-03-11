<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('home');
});
Route::get('/tentangkami', function () {
    return view('tentangkami');
});
Route::get('/layanan', function () {
    return view('layanan');
});
Route::get('/karir', function () {
    return view('karir');
});
Route::get('/kontak', function () {
    return view('kontak');
});

// Dashboard Admin
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

// Login
Route::get('/login', [AuthController::class,'index'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'login'])->name('login');

// Logout
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

// Dashboard Admin
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');

Route::get('/data-user', [DashboardController::class, 'userCount'])->name('userCount')->middleware('auth');
