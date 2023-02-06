<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CharacterController;
use App\Http\Controllers\ProfileController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('auth')->group(function () {
    Route::post('login', [AuthController::class, 'login']);
    Route::post('register', [AuthController::class, 'register']);
});

Route::get('user/{user}/characters', [CharacterController::class, 'index']);

Route::prefix('character')->group(function () {
    Route::get('{character}/attributes', [CharacterController::class, 'getAttributes']);
    Route::get('{character}/capacities', [CharacterController::class, 'capacities']);
});

Route::apiResource('characters', CharacterController::class);

Route::prefix('admin')->middleware('isAdmin')->group(function () {
    Route::apiResource('profile', ProfileController::class)->except('show', 'create');
});
