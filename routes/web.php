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

<<<<<<< HEAD
=======

// Dashboard Admin
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

>>>>>>> 1063ee55921d4ed38cf662a886b23d9eaa8f18f6
// Login
Route::get('/login', [AuthController::class,'index'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'login'])->name('login');

// Logout
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

<<<<<<< HEAD
// Dashboard Admin
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');
=======

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




>>>>>>> 1063ee55921d4ed38cf662a886b23d9eaa8f18f6
