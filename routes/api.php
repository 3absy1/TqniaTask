<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\TopUpApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('user')->group(function () {
    Route::post('register', [AuthController::class, 'register']);
    Route::post('login', [AuthController::class, 'login']);
    Route::post('logout', [AuthController::class, 'logout'])->middleware('auth:client');

    Route::middleware('auth:client')->group(function () {
        Route::post('topup-request', [TopUpApiController::class, 'store']);
        Route::get('profile', [AuthController::class, 'profile']);
    });
});
