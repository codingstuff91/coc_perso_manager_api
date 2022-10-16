<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CapacityController;
use App\Http\Controllers\AttributeController;
use App\Http\Controllers\CharacterController;
use App\Http\Controllers\ParticularityController;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('auth')->group(function(){
    Route::post('login', [AuthController::class, 'login']);
    Route::post('register', [AuthController::class, 'register']);
});

Route::get('user/{user}/characters', [CharacterController::class, 'index']);

Route::prefix('character')->group(function(){
    Route::get('{character}/attributes', [CharacterController::class, 'getAttributes']);
    Route::get('{character}/capacities', [CharacterController::class, 'capacities']);
});

Route::resource('characters', CharacterController::class);

Route::resource('attributes', AttributeController::class);

Route::prefix('admin')->middleware('isAdmin')->group(function(){
    Route::resource('particularities', ParticularityController::class)->except('show', 'create');
    Route::resource('capacities', CapacityController::class)->except('show', 'create');
    Route::resource('profile', ProfileController::class)->except('show', 'create');
});
