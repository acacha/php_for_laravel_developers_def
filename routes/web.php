<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

// HTTP GET
Route::get('/', [TaskController::class,'index']);
Route::get('/tasks', [TaskController::class,'index']);

Route::get('/users', function () {
    return view('users');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/about', function () {
    return view('about');
});
