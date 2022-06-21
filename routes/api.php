<?php

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

Route::middleware('auth:sanctum')->group(function() {
    Route::prefix('v1')->group(function() {
        Route::apiResource('/album', \App\Http\Controllers\V1\AlbumController::class);
        Route::get('/images', [\App\Http\Controllers\V1\ImageManipulationController::class, 'index']);
        Route::get('/images/{image}', [\App\Http\Controllers\V1\ImageManipulationController::class, 'show']);
        Route::post('/images/resize', [\App\Http\Controllers\V1\ImageManipulationController::class, 'resize']);
        Route::get('/images/by-album/{album}', [\App\Http\Controllers\V1\ImageManipulationController::class, 'byAlbum']);
        Route::delete('/images/{image}', [\App\Http\Controllers\V1\ImageManipulationController::class, 'destroy']);
    });
});


