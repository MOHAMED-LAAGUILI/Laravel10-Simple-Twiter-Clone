<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TweetController;
use Illuminate\Support\Facades\Route;

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

Route::post('/tweet', [TweetController::class, 'store'])->name("tweet.create");
Route::get('/tweet/{tweet}', [TweetController::class, 'show'])->name("tweet.show");
Route::get('/tweet/{tweet}/edit', [TweetController::class, 'show'])->name("tweet.edit");
Route::put('/tweet/{tweet}', [TweetController::class, 'update'])->name('tweet.update');

Route::delete('/tweet/{tweet}', [TweetController::class, 'destroy'])->name("tweet.destroy");

Route::post('/tweets/{tweet}/comments', [CommentController::class, 'store'])->name('tweet.comments.store');





Route::get('/terms', function () {
    return view('terms'); 
});

// Fallback route for 404
Route::fallback(function () {
    return response()->view('errors.404', [], 404);
});
