<?php

use App\Http\Controllers\Authentication\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('login', [AuthController::class,'login'])->middleware(['guest'])->name('login');
Route::get('forgot-password', [AuthController::class,'forgotPassword'])->name('forgot-password')->middleware('guest');
Route::post('forgot-password', [AuthController::class,'forgotPasswordRequest'])->name('forgot-password-request')->middleware('guest');

Route::get('reset-password/{token}', [AuthController::class,'reset'])->name('password.reset')->middleware('guest');

Route::post('reset-password/{token}', [AuthController::class,'resetPassword'])->name('reset-password')->middleware('guest');

Route::post('authenticate', [AuthController::class, 'authenticate'])->middleware(['guest'])->name('authenticate');

Route::post('logout', [AuthController::class,'logout'])->middleware(['auth'])->name('logout');
