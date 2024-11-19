<?php

use App\Http\Controllers\SentenceController;
use App\Http\Controllers\TaskController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::get('/sentences', [SentenceController::class, 'index']);
Route::get('/tasks', [TaskController::class, 'index']);