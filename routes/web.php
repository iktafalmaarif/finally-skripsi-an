<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\HomeController;
use App\Http\Controllers\Dashboard\PendudukController;

// Landing Controller
use App\Http\Controllers\Landing\LandingController;


#LANDING PAGE

// Home
Route::get('/', [LandingController::class, 'index']);
Route::get('/search-data', [LandingController::class, 'search']);


// Dashboard
Route::get('/dashboard', [HomeController::class, 'home']);

//Penduduk Page
Route::get('/data-penduduk', [PendudukController::class, 'index'])->name('Data Penduduk');
Route::get('/form-penduduk', [PendudukController::class, 'formPenduduk']);
Route::post('/insert-penduduk', [PendudukController::class, 'store']);

