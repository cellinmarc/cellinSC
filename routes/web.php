<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\TestingController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/welcome', [HomeController::class, 'welcome']);
Route::get('/service', [HomeController::class, 'service']);
Route::get('/about', [HomeController::class, 'about']);
Route::get('/contact', [HomeController::class, 'contact']);
Route::get('/login', [HomeController::class, 'login']);
Route::get('/register', [HomeController::class, 'register']);

Route::get('/test', [TestingController::class, 'test']);
Route::get('test/{id}', [TestingController::class, 'testById']);
Route::get('/test/{id}/edit', [TestingController::class, 'testByIdEdit']);