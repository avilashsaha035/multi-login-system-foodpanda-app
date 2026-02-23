<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth');

Route::get('/sso-login', [AuthController::class, 'ssoLogin']);
Route::match(['get','post'], '/logout', [AuthController::class, 'logout'])->middleware('auth');

