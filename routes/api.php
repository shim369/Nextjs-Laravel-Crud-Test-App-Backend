<?php


use Illuminate\Support\Facades\Route;

Route::get('tasks',
[App\Http\Controllers\TaskController::class, 'tasks']);

Route::get('get_task/{id}',
[App\Http\Controllers\TaskController::class, 'getTask']);

Route::post('save_task',
[App\Http\Controllers\TaskController::class, 'saveTask']);
