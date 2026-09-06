<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {
    Route::view('/login', 'auth.login')->name('login');
    Route::get('/login_user/{user_id}', [AuthController::class, 'login_user'])->name('user.login');
});

Route::middleware('auth')->group(function () {
    Route::redirect('/', '/home');
    Route::get('/home', [MainController::class, 'index'])->name('home');

    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

    Route::get('/create-post', [MainController::class, 'create'])->name('post.create');

    Route::get('/post-update/{post_id}', [MainController::class, 'editPost'])->name('post.edit');
    Route::get('/post-delete/{post_id}', [MainController::class, 'deletePost'])->name('post.delete');
});