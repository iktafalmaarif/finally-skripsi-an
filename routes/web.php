<?php

use App\Http\Controllers\Dashboard\HomeController;

use App\Http\Controllers\Dashboard\PendudukController;
use App\Http\Controllers\Dashboard\PengajuanDashController;
use App\Http\Controllers\Dashboard\UsersController;
use App\Http\Controllers\Landing\LandingController;
// Landing Controller
use App\Http\Controllers\Landing\PengajuanController;
use App\Http\Controllers\Landing\TrackingController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\LoginController;


//LANDING PAGE

// Home
Route::get('/', [LandingController::class, 'index'])->name('Home');
Route::post('/search-data', [LandingController::class, 'search']);
Route::post('/checking', [LandingController::class, 'cariDataByNIK']);

// Pengajuan
Route::post('/pengajuan', [PengajuanController::class, 'insertPengajuan']);

// Tracking
Route::post('/tracking', [TrackingController::class, 'trackingSurat'])->name('tracking');
Route::get('/tracking-surat', [TrackingController::class, 'tracking']);



// Login
Route::get('/login', [LoginController::class, 'index'])->name('login.index');
Route::post('/action-login', [LoginController::class, 'login']);
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/convert/{id_pengajuan}', [PengajuanDashController::class, 'convert']);

Route::group(['middleware' => ['auth']], function(){
    //admin
    // Dashboard
    Route::get('/dashboard', [HomeController::class, 'home']);
    Route::get('/daftar-pengajuan', [PengajuanDashController::class, 'index'])->name('Daftar Pengajuan');
    Route::get('/form-pengajuan', [PengajuanDashController::class, 'formPengajuan']);
    Route::get('/cari-data', [PengajuanDashController::class, 'search']);
    Route::get('/approve/{id_pengajuan}', [PengajuanDashController::class, 'approve']);
    Route::get('/reject/{id_pengajuan}', [PengajuanDashController::class, 'reject']);
    
    //Penduduk Page
    Route::get('/data-penduduk', [PendudukController::class, 'index'])->name('Data Penduduk');
    Route::get('/form-penduduk', [PendudukController::class, 'formPenduduk']);
    Route::post('/insert-penduduk', [PendudukController::class, 'store']);
    Route::get('/edit-penduduk/{id}', [PendudukController::class, 'edit']);
    Route::post('/update/{id}', [PendudukController::class, 'update']);
    Route::get('/delete-penduduk/{id}', [PendudukController::class, 'destroy']);

    // User
    Route::get('/data-user', [UsersController::class, 'index'])->name('Data User');
    Route::post('/edit-surat/{id}', [PengajuanDashController::class, 'editNoSurat']);
    Route::get('/form-tambah-user', [UsersController::class, 'formUser']);
    Route::post('/form-tambah-user-add', [UsersController::class, 'store']);
    //admin end

});
    

