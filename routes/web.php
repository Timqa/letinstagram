<?php

  use App\Http\Controllers\MainController;
  use App\Http\Controllers\LoginController;
  use Illuminate\Support\Facades\Route;

Route::get('/', [MainController::class, 'index']);
Route::get('/login', [LoginController::class, 'login']);
Route::get('/someroute', [LoginController::class, 'someMethod']);
