<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Homepage\HomeController;
use App\Http\Controllers\Auth\{LoginController, RegisterController};
use App\Http\Controllers\Admin\GajiController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\KarirController;
use App\Http\Controllers\Admin\KontakController;
use App\Http\Controllers\Admin\ArtikelController;
use App\Http\Controllers\Admin\PelamarController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\User\PegawaiController;

// Auth
Route::middleware(['guest', 'PreventBackHistory'])->group( function ()
{
    // Login
    Route::get('login', [LoginController::class,'index'])->name('login');
    Route::post('login', [LoginController::class, 'login']);

    // Home
    Route::get('/', [HomeController::class, 'index'])->name('/');

    // About
    Route::get('tentang', [HomeController::class, 'about'])->name('tentang');

    // blog
    Route::get('blog', [HomeController::class, 'blog'])->name('blog');
    Route::get('detail/{id}', [HomeController::class, 'detail'])->name('detail');

    // Layanan
    Route::get('layanan', [HomeController::class, 'layanan'])->name('layanan');

    // Karir
    Route::get('career', [HomeController::class, 'career'])->name('career');
    Route::post('career', [HomeController::class, 'store'])->name('career.store');

    // Pesan
    Route::get('kontak', [HomeController::class, 'indexKontak'])->name('kontak');
    Route::post('post', [HomeController::class, 'postKontak'])->name('post');
});


// User
Route::middleware(['auth', 'user', 'PreventBackHistory'])->group( function ()
{
    Route::get('user/dashboard', [PegawaiController::class, 'index'])->name('user.dashboard');

    Route::get('user/editpassword/{user:nip}', [PegawaiController::class, 'editPassword'])->name('edit');
    Route::put('user/editpassword/{user:nip}', [PegawaiController::class, 'updatePassword']);

    Route::get('user/download', [PegawaiController::class, 'downloadGaji'])->name('user.download');

    Route::post('user/logout', [PegawaiController::class, 'logout'])->name('user.logout');
});


// Admin
Route::middleware(['auth', 'admin', 'PreventBackHistory'])->group( function ()
{
    // Dashboard Admin
    Route::get('dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
    // Route::get('user/editpassword', [DashboardController::class, 'editPassword'])->name('edit.password');
    // Route::patch('user/editpassword', [DashboardController::class, 'updatePassword']);

    // Data Gaji
    Route::get('gaji', [GajiController::class, 'index'])->name('gaji.index');
    Route::get('data-gaji', [GajiController::class, 'dataGaji'])->name('data.gaji');
    Route::get('all-gaji', [GajiController::class, 'getAllGaji'])->name('all.gaji');
    Route::post('delete-gaji', [GajiController::class, 'deleteGaji'])->name('delete.gaji');
    Route::post('select-gaji', [GajiController::class, 'deleteSelected'])->name('select.gaji');
    Route::post('importgaji', [GajiController::class, 'importgaji'])->name('importgaji');
    Route::get('download', [GajiController::class, 'download'])->name('download');

    // Karir
    Route::resource('karir', KarirController::class);

        // artikel
        Route::resource('artikel', ArtikelController::class);

    // Kontak
    Route::resource('contact', KontakController::class);

    // Pelamar
    Route::resource('pelamar', PelamarController::class);

    // user
    Route::resource('user', UserController::class);

    // Register
    Route::get('register', [RegisterController::class, 'index'])->name('register');
    Route::post('register', [RegisterController::class, 'register']);

    // Logout
    Route::post('logout', [LoginController::class, 'logout'])->name('admin.logout');
});
