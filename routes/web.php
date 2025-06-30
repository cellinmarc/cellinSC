<?php

use App\Http\Controllers\TestingController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// get post put/patch delete
// testing testing/1 testing/2/edit

Route::get('testing', [TestingController::class, 'test']);
Route::get('testing/{id}', [TestingController::class, 'testdetail']);