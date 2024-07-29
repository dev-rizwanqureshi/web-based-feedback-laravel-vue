<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\FeedbackCommentController;

Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);
Route::middleware('auth:sanctum')->post('logout', [AuthController::class, 'logout']);


Route::middleware('auth:sanctum')->group(function () {
    Route::apiResource('feedback', FeedbackController::class);
    Route::apiResource('feedback/{feedback}/comments', FeedbackCommentController::class);
});
