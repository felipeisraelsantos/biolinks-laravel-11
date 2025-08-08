<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'login']);
Route::get('/dashboard', fn() => 'dashboard :: '.auth()->id())->middleware('auth')->name('dashboard');
