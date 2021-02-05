<?php

use Illuminate\Support\Facades\Route;

// Rotta generale
Route::get('/', 'MainController@home')
        ->name('home');
// Employee
Route::get('/emps', 'EmployeeController@index')
        ->name('emp-index');

Route::get('/epm/{id}', 'EmployeeController@show')
        ->name('emp-show');

// Task
Route::get('/tasks', 'TaskController@index')
         ->name('task-index');

Route::get('/task/{id}', 'TaskController@show')
         ->name('task-show');

// Typology
Route::get('/type', 'TypologyController@index')
        ->name('type-index');

Route::get('/type/{id}', 'TypologyController@show')
        ->name('type-show');
