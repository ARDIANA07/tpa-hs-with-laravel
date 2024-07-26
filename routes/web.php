<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\SantriController;
use App\Http\Controllers\PengajarController;

//router home
Route::get('/home', [HomeController::class, 'index']);
Route::get('/', [LandingPageController::class, 'index']);

//router santri
Route::get('/home', [HomeController::class, 'index']);
Route::get('/santri', [SantriController::class, 'index']);
Route::get('/santri/galeri', [SantriController::class, 'galery']);
Route::post('/santri/store', [SantriController::class, 'store']);
Route::get('/santri/{id}', [SantriController::class, 'destroy']);

//router pengajar
Route::get('/pengajar', [PengajarController::class, 'index']);
Route::post('/pengajar/store', [PengajarController::class, 'store']);
Route::delete('/pengajar{id}', [PengajarController::class, 'destroy']);