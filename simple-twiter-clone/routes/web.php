<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TweetController;
use Illuminate\Support\Facades\Route;


//Dashboard route
Route::get('/', [DashboardController::class, 'index'])->name('dashboard');


// Auth Routes
require __DIR__.'/auth.php';

// user Routes

require __DIR__.'/user.php';

//Tweet & comment Routes
require __DIR__.'/tweet.php';

// Static Pages Route
Route::get('/terms', function () {
    return view('terms');
});

// Fallback route for 404 Error Page
Route::fallback(function () {
    return response()->view('errors.404', [], 404); // Use an empty array instead of an empty string
});

