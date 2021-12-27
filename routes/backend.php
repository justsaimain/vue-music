<?php

use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\MusicController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:admin')->name('backend.')->group(function () {
    Route::get('/', [DashboardController::class, 'index']);

    Route::get('/music', [MusicController::class, 'index'])->name('music');
    Route::post('/fetch', [MusicController::class, 'fetchMusic']);
});
