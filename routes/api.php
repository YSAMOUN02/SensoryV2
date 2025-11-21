<?php

use App\Http\Controllers\api\ApiHandlerController;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');


Route::middleware('auth:api')->group(function () {

});
// route to fetch immediate children of a unit


Route::post('/login/submit', [ApiHandlerController::class, 'login_submit']);

Route::post('/check/name', [ApiHandlerController::class, 'check_name_for_reset_password']);


