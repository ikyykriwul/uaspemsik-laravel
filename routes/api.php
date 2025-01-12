<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\AuthController;

Route::apiResource('articles', ArticleController::class);
Route::post('auth/register', [AuthController::class, 'register']);