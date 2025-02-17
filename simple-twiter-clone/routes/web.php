<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TweetController;
use Illuminate\Support\Facades\Route;

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

Route::post('/tweet', [TweetController::class, 'store'])->name("tweet.create");
Route::get('/tweet/{id}', [TweetController::class, 'show'])->name("tweet.show");
Route::delete('/tweet/{id}', [TweetController::class, 'destroy'])->name("tweet.destroy");






Route::get('/terms', function () {
    return view('terms'); 
});

// Fallback route for 404
Route::fallback(function () {
    return response()->view('errors.404', [], 404);
});
