<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\personapiController;
use App\Http\Controllers\Api\userapiController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::apiResource('people',personapiController::class);
Route::apiResource('users',userapiController::class);
