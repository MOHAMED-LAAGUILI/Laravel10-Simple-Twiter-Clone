<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


Route::get('/', action: [DashboardController::class, 'index']);
Route::get('/profile', action: [ProfileController::class, 'index']);



// Fallback route for 404
Route::fallback(function () {
    return response()->view('errors.404', [], 404);
});