<?php 

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;




Route::get('/user/{user}', [UserController::class, 'show'])
->name('user.profile')->middleware('auth')
->middleware('auth');
Route::get('/profile/edit/{user}', [UserController::class, 'edit'])
->name('profile.edit')
->middleware('auth');

Route::put('/profile/update/{user}', [UserController::class, 'update'])
->name('user.update')
->middleware('auth');