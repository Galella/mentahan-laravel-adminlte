<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;

Route::get('/', function () {
    return view('auth.login');
});

// Route untuk autentikasi bawaan Laravel (dengan Fortify)
// Kita harus menambahkan route login manual karena kita menggunakan layout sendiri

// Route publik untuk login
Route::get('/login', function() {
    return view('auth.login');
})->name('login');

Route::post('/login', [App\Http\Controllers\Auth\LoginController::class, 'login']);
Route::post('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');

// Route untuk dashboard admin yang dilindungi oleh middleware role
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');

    // Route untuk manajemen user
    Route::resource('users', UserController::class)->except(['show']);

    // Route untuk manajemen role
    Route::resource('roles', RoleController::class)->except(['show']);
});

// Route untuk user biasa
Route::middleware(['auth', 'role:user'])->group(function () {
    Route::get('/user/dashboard', function () {
        return view('user.dashboard');
    })->name('user.dashboard');
});
