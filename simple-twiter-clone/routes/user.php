<?php 

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;




Route::get('/user/{user}', [UserController::class, 'show'])
->name('user.profile')
->middleware('auth');
Route::get('/profile/edit/{user}', [UserController::class, 'edit'])
->name('profile.edit')
->middleware('auth');