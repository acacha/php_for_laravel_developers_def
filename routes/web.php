<?php

use App\Models\Task;
use Illuminate\Support\Facades\Route;

// HTTP GET
Route::get('/', function () {
    return view('tasks',[
        'tasks' => Task::all()
    ]);
});

Route::get('/tasks', function () {
    return view('tasks',[
        'tasks' => []
    ]);
});

Route::get('/users', function () {
    return view('users');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/about', function () {
    return view('about');
});
