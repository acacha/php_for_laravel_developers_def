<?php

use Illuminate\Support\Facades\Route;

// HTTP GET
Route::get('/', function () {
    // POJO -> Plain Old Java Object
    $task1 = new stdClass();
    $task1->id = 1;
    $task1->title = "Task 1";
    $task1->description = "Bla bla bla";
    $task1->completed = 1;
    $task2 = new stdClass();
    $task2->id = 2;
    $task2->title = "Task 2";
    $task2->description = "Bla bla bla";
    $task2->completed = 1;

    $task3 = new stdClass();
    $task3->id = 3;
    $task3->title = "Task 3";
    $task3->description = "Bla bla bla";
    $task3->completed = 0;

    $tasks = [
      $task1,
      $task2,
      $task3
    ];

    return view('tasks',[
        'tasks' => $tasks
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
