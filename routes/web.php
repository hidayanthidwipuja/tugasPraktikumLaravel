<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth; 
use App\Http\Controllers\BukuController;
use App\Http\Controllers\AuthController;


Route::get('/', function () {
    if (Auth::check()) {
        return redirect('/home');
    }
    return redirect('/login');
});


Route::middleware('guest')->group(function () {
    Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
    Route::post('/register', [AuthController::class, 'register']);
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
});


Route::middleware('auth')->group(function () {
    // Halaman Home setelah login
    Route::get('/home', function () {
        return view('home');
    })->name('home');

    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    Route::get('/buku', [BukuController::class, 'index'])->name('buku.index');
    Route::get('/tambah-buku', [BukuController::class, 'create'])->name('buku.create');
    Route::post('/simpan-buku', [BukuController::class, 'store'])->name('buku.store');
    Route::get('/edit-buku/{id}', [BukuController::class, 'edit'])->name('buku.edit');
    Route::put('/update-buku/{id}', [BukuController::class, 'update'])->name('buku.update');
    Route::delete('/hapus-buku/{id}', [BukuController::class, 'destroy'])->name('buku.destroy');
});