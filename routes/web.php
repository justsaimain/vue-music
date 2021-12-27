<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AdminLoginController;
use Illuminate\Support\Facades\Auth;

Route::get('/{all}', function () {
    return view('welcome');
})->where('all', '^(?!api)(?!backend).*$');


Route::get('/backend/login', [AdminLoginController::class, 'showLoginForm']);
Route::post('/backend/login', [AdminLoginController::class, 'login'])->name('backend.login');
Route::post('/backend/logout', [AdminLoginController::class, 'logout'])->name('logout');
