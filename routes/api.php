<?php

use App\Http\Controllers\Api\ProjectController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::prefix('/v1')->group(function () {

    Route::get('/projects-list', [ProjectController::class, 'projectsList']);
    Route::get('/projects-page', [ProjectController::class, 'projectIndexPage']);
    Route::get('/project/{id}', [ProjectController::class, 'projectShow']);
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
