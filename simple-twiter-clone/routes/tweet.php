<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\TweetController;
use Illuminate\Support\Facades\Route;



Route::group(
    ['prefix' => 'tweets/', 'as' => 'tweet.', 'middleware' => ['auth']],
    function () {
        // Tweets
        Route::post('/', [TweetController::class, 'store'])->name("store");
        Route::get('/{tweet}', [TweetController::class, 'show'])->name("show")->withoutMiddleware(['auth']);
        Route::get('/{tweet}/edit', [TweetController::class, 'show'])->name("edit");
        Route::put('/{tweet}', [TweetController::class, 'update'])->name('update');
        Route::delete('/{tweet}', [TweetController::class, 'destroy'])->name("destroy");
        // Comments
        Route::post('/{tweet}/comments', [CommentController::class, 'store'])->name('comments.store');

    }
);




