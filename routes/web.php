<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GajiController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KarirController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;

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

// Home
Route::get('/', [HomeController::class, 'index'])->name('/');

// About
Route::get('/tentang', [HomeController::class, 'about'])->name('tentang');

// Layanan
Route::get('/layanan', [HomeController::class, 'layanan'])->name('layanan');

// Karir
Route::get('/career', [HomeController::class, 'career'])->name('career');

// Pesan
Route::get('/kontak', [HomeController::class, 'indexKontak'])->name('kontak');
Route::post('/post', [HomeController::class, 'postKontak'])->name('post');

// Login
Route::get('/login', [LoginController::class,'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'login'])->name('login');

// User
Route::group(['middleware' => ['auth', 'ceklevel:3']], function()
{
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
});

// Admin
Route::group(['middleware' => ['auth', 'ceklevel:1,2']], function ()
{
    // Dashboard Admin
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Data Pegawai
    Route::resource('pegawai', PegawaiController::class);

    // Data Gaji
    Route::get('/gaji', [GajiController::class, 'index'])->name('gaji');
    Route::post('/importgaji', [GajiController::class, 'importgaji'])->name('importgaji');

    // Karir
    Route::resource('karir', KarirController::class);

    // Register
    Route::get('/register', [RegisterController::class, 'index'])->name('register')->middleware('guest');
    Route::post('/register', [RegisterController::class, 'register'])->name('register');
});

// Logout
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

