<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [DashboardController::class, 'index']);
Route::get('/profile', [ProfileController::class, 'index']);

Route::get('/terms', function () {
    return view('terms'); // ✅ Fixed: Removed extra parenthesis
});

// Fallback route for 404
Route::fallback(function () {
    return response()->view('errors.404', [], 404);
});
