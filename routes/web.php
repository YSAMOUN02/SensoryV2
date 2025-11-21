<?php

use App\Http\Controllers\backend\AdminController;
use App\Http\Controllers\backend\UserController;

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [AdminController::class, 'login'])->name('login');




Route::get('/forgot/password', [AdminController::class, 'forgot_password']);
Route::post('/login/submit', [AdminController::class, 'login_submit']);
Route::post('/login/code/submit', [AdminController::class, 'login_submit_code_to_reset']);
Route::post('/reset/password/submit', [AdminController::class, 'reset_submit']);

Route::middleware(['auth'])->group(function () {











});
