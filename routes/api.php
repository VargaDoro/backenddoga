<?php

use App\Http\Controllers\SzavakController;
use App\Http\Controllers\TemaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/szavak', [SzavakController::class, 'index']);
Route::get('/szavak/tema/', [SzavakController::class, 'show']);
Route::get('/tema', [TemaController::class, 'index']);
