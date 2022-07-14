<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
    return view('otentifikasi.login');
});

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/dasboard', [App\Http\Controllers\DasboardController::class, 'index'])->middleware('auth');

Route::get('/login', [App\Http\Controllers\OtentifikasiController::class, 'index'])->middleware('guest');
Route::post('/login', [App\Http\Controllers\OtentifikasiController::class, 'login']);
Route::get('/logout', [App\Http\Controllers\OtentifikasiController::class, 'logout']);
Route::get('/register', [App\Http\Controllers\OtentifikasiController::class, 'register']);
Route::post('/registerpost', [App\Http\Controllers\OtentifikasiController::class, 'registerPost']);

Route::get('/lupapassword', [App\Http\Controllers\OtentifikasiController::class, 'lupapassword']);

// jenispengaduan
Route::get('/jenispengaduan', [App\Http\Controllers\JenispengaduanController::class, 'index']);
Route::get('/jenispengaduan/create', [App\Http\Controllers\JenispengaduanController::class, 'create']);
Route::post('/jenispengaduan', [App\Http\Controllers\JenispengaduanController::class, 'store']);
Route::get('/jenispengaduan/edit/{id}', [App\Http\Controllers\JenispengaduanController::class, 'edit']);
Route::post('/jenispengaduan/update/{id}', [App\Http\Controllers\JenispengaduanController::class, 'update']);
Route::post('/jenispengaduan/delete/{id}', [App\Http\Controllers\JenispengaduanController::class, 'destroy']);

// peraturan
Route::get('/peraturan', [App\Http\Controllers\PeraturanController::class, 'index']);
Route::get('/peraturan/create', [App\Http\Controllers\PeraturanController::class, 'create']);
Route::post('/peraturan', [App\Http\Controllers\PeraturanController::class, 'store']);
Route::get('/peraturan/edit/{id}', [App\Http\Controllers\PeraturanController::class, 'edit']);
Route::post('/peraturan/update/{id}', [App\Http\Controllers\PeraturanController::class, 'update']);
Route::post('/peraturan/delete/{id}', [App\Http\Controllers\PeraturanController::class, 'destroy']);

// pengaduan
Route::get('/pengaduan', [App\Http\Controllers\PengaduanController::class, 'index']);
Route::get('/pengaduan/create', [App\Http\Controllers\PengaduanController::class, 'create']);
Route::post('/pengaduan', [App\Http\Controllers\PengaduanController::class, 'store']);
Route::get('/pengaduan/edit/{id}', [App\Http\Controllers\PengaduanController::class, 'edit']);
Route::post('/pengaduan/update/{id}', [App\Http\Controllers\PengaduanController::class, 'update']);
Route::post('/pengaduan/delete/{id}', [App\Http\Controllers\PengaduanController::class, 'destroy']);