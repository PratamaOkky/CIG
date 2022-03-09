<?php

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
Route::get('/login', function () {
    return view('auth.login');
});