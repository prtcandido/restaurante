<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

use App\Http\Controllers\RestauranteApiController;

Route::get('/restaurante',[RestauranteApiController::class,'apiAll']);

Route::get('/restaurante/{restaurante}',[RestauranteApiController::class,'apiFind']);

Route::post('/restaurante',[RestauranteApiController::class,'apiStore']);

Route::put('/restaurante/{restaurante}',[RestauranteApiController::class,'apiUpdate']);

Route::delete('/restaurante/{restaurante}',[RestauranteApiController::class,'apiDelete']);
