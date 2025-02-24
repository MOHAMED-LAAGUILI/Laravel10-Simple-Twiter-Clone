<?php 

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;



Route::get('/register', [AuthController::class, 'register'])->name('register.show');
Route::post('/register', [AuthController::class, 'store'])->name('register.store');
Route::get('/login', [AuthController::class, 'login'])->name('login.show');
Route::post('/login', [AuthController::class, 'authentication'])->name('login');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
