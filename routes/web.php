<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\HomeController;
use App\Http\Controllers\Dashboard\PendudukController;
use App\Http\Controllers\Dashboard\UsersController;
use App\Http\Controllers\Dashboard\PengajuanDashController;


// Landing Controller
use App\Http\Controllers\Landing\LandingController;
use App\Http\Controllers\Landing\PengajuanController;
use App\Http\Controllers\Landing\TrackingController;


#LANDING PAGE

// Home
Route::get('/', [LandingController::class, 'index'])->name('Home');
Route::get('/search-data', [LandingController::class, 'search']);
Route::post('/penyo', [LandingController::class, 'cariDataByNIK']);

// Pengajuan
Route::post('/pengajuan', [PengajuanController::class, 'insertPengajuan']);

// Tracking
Route::post('/tracking', [TrackingController::class, 'trackingSurat'])->name('tracking');
Route::get('/tracking-surat', [TrackingController::class, 'tracking']);

// Dashboard
Route::get('/dashboard', [HomeController::class, 'home']);
Route::get('/daftar-pengajuan', [PengajuanDashController::class, 'index'])->name('Daftar Pengajuan');
Route::get('/form-pengajuan', [PengajuanDashController::class, 'formPengajuan']);
Route::get('/cari-data', [PengajuanDashController::class, 'search']);
Route::get('/approve/{id_pengajuan}', [PengajuanDashController::class, 'approve']);
Route::get('/convert/{id_pengajuan}', [PengajuanDashController::class, 'convert']);

//Penduduk Page
Route::get('/data-penduduk', [PendudukController::class, 'index'])->name('Data Penduduk');
Route::get('/form-penduduk', [PendudukController::class, 'formPenduduk']);
Route::post('/insert-penduduk', [PendudukController::class, 'store']);
Route::get('/edit-penduduk', [PendudukController::class, 'edit'])->name('penduduk.edit');


// User
Route::get('/data-user', [UsersController::class, 'index'])->name('Data User');
Route::get('/form-tambah-user', [UsersController::class, 'formUser']);
Route::post('/form-tambah-user-add', [UsersController::class, 'store']);

