<?php

use App\Models\User;
use Yajra\Datatables\Datatables;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\GajiController;
use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\admin\KarirController;
use App\Http\Controllers\admin\KontakController;
use App\Http\Controllers\admin\ArtikelController;
use App\Http\Controllers\admin\PelamarController;
use App\Http\Controllers\auth\RegisterController;
use App\Http\Controllers\homepage\HomeController;
use App\Http\Controllers\admin\DashboardController;

// Home
Route::get('/', [HomeController::class, 'index'])->name('/');


// About
Route::get('/tentang', [HomeController::class, 'about'])->name('tentang');

// blog
Route::get('/blog', [HomeController::class, 'blog'])->name('blog');

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

// Admin
Route::group(['middleware' => ['auth', 'ceklevel:1,2']], function ()
{
    // Dashboard Admin
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/pengguna/editpassword/{id}', [DashboardController::class, 'editPassword'])->name('edit.password');
    Route::patch('/pengguna/editpassword/{id}', [DashboardController::class, 'updatePassword'])->name('update.password');

    // Data Gaji
    Route::controller(GajiController::class)->group(function ()
    {
        Route::get('/gaji', 'index')->name('gaji.index');
        Route::get('/data-gaji', 'dataGaji')->name('data.gaji');
        Route::get('/all-gaji', 'getAllGaji')->name('all.gaji');
        Route::post('/delete-gaji', 'deleteGaji')->name('delete.gaji');
        Route::post('/select-gaji', 'deleteSelected')->name('select.gaji');
        Route::post('/importgaji', 'importgaji')->name('importgaji');
        Route::get('/download', 'download')->name('download');
    });

    // Karir
    Route::resource('karir', KarirController::class);

     // artikel
     Route::resource('artikel', ArtikelController::class);

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
