<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/verify-email', [AuthController::class, 'verifyUserEmailActivation']);
Route::post('/forgot-password', [AuthController::class, 'forgotPassword']);
Route::post('/verify-password', [AuthController::class, 'verifyForgotPassword']);
Route::post('/reset-password', [AuthController::class, 'resetPassword']);

Route::middleware('auth:sanctum')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::post('/verify-email', [AuthController::class, 'verifyUserEmailActivation']);
    Route::post('/verify-otp', [AuthController::class, 'verifyOtpCode']);
    Route::middleware('verify.otp')->group(function () {
        Route::get('/users', [UserController::class, 'index']);
    });
});
