<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ItemController;

Route::get('/', function () {
    return view('welcome');
});

// Route untuk halaman login
Route::get('/login', [LoginController::class, 'index']);

// Route untuk halaman dashboard
Route::get('/dashboard', [DashboardController::class, 'index']);

// Route untuk halaman items
Route::get('/items', [ItemController::class, 'index']);