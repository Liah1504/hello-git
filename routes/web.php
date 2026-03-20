<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\productController;
use Illuminate\Support\Facades\Route;

// ==========================================
// RUTAS EXISTENTES (NO BORRAR)
// ==========================================

Route::get('/', function () {
    return view('welcome');
});

Route::get('/catalogo', [productController::class, 'index'])->name('catalogo');
Route::get('/tienda', [productController::class, 'index'])->name('tienda');

// ==========================================
// NUEVAS RUTAS DE AUTENTICACIÓN (AGREGAR)
// ==========================================

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
