<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\GajiController;
use App\Http\Controllers\admin\KarirController;
use App\Http\Controllers\admin\PegawaiController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\KontakController;
use App\Http\Controllers\admin\PelamarController;
use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\auth\RegisterController;
use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\profile\ProfileController;
use App\Http\Controllers\homepage\HomeController;


// Home
Route::get('/', [HomeController::class, 'index'])->name('/');

// About
Route::get('/tentang', [HomeController::class, 'about'])->name('tentang');

// Layanan
Route::get('/layanan', [HomeController::class, 'layanan'])->name('layanan');

// Karir
Route::get('/career', [HomeController::class, 'career'])->name('career');
Route::post('/career', [HomeController::class, 'store'])->name('career.store');

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
    Route::get('/download-gaji', [ProfileController::class, 'download'])->name('download.gaji');
});

// Admin
Route::group(['middleware' => ['auth', 'ceklevel:1,2']], function ()
{
    // Dashboard Admin
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Data Pegawai
    Route::resource('pegawai', PegawaiController::class);

    // Data Gaji
    Route::resource('gaji', GajiController::class);
    Route::post('/importgaji', [GajiController::class, 'importgaji'])->name('importgaji');
    Route::get('/download', [GajiController::class, 'download'])->name('download');

    // Karir
    Route::resource('karir', KarirController::class);

    // Kontak
    Route::resource('contact', KontakController::class);

    // Pelamar
    Route::resource('pelamar', PelamarController::class);

    // Pengguna
    Route::resource('pengguna', UserController::class);

    // Register
    Route::get('/register', [RegisterController::class, 'index'])->name('register')->middleware('guest');
    Route::post('/register', [RegisterController::class, 'register'])->name('register');
});

// Logout
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

