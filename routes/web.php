<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\LinkController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('guest')->group(function(){
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login', [LoginController::class, 'login']);
    Route::get('/register', [RegisterController::class, 'index'])->name('register');
    Route::post('/register', [RegisterController::class, 'register']);
});

Route::middleware('auth')->group(function() {
    Route::get('/logout', LogoutController::class)->middleware('auth')->name('logout');
    Route::get('/dashboard', fn() => 'dashboard :: '.auth()->id())->name('dashboard');
    Route::get('/links/create', [LinkController::class, 'create'])->name('links.create');
    Route::post('/links/create', [LinkController::class, 'store']);
});


