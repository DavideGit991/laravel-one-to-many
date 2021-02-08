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

  // EMP create
Route::get('/edit/emp','EmployeeController@create')
        ->name('emp-create');
        
Route::post('/store/emp','EmployeeController@store')
        ->name('emp-store');
// Task
Route::get('/tasks', 'TaskController@index')
         ->name('task-index');

Route::get('/task/{id}', 'TaskController@show')
         ->name('task-show');

//Task create
Route::get('/new/task','TaskController@create')
        ->name('task-create');
        
Route::post('/store/task','TaskController@store')
        ->name('task-store');
        
//Task update
   Route::get('/edit/task/{id}','TaskController@edit')
        ->name('task-edit');
        
Route::post('/update/task/{id}','TaskController@update')
        ->name('task-update');

// Typology
Route::get('/type', 'TypologyController@index')
        ->name('type-index');

Route::get('/type/{id}', 'TypologyController@show')
        ->name('type-show');
// Type-create
Route::get('/new/Typology','TypologyController@create')
        ->name('typology-create');
        
Route::post('/store/typology','TypologyController@store')
        ->name('typology-store');
        
// Type-update
   Route::get('/edit/typology/{id}','TypologyController@edit')
        ->name('typology-edit');
        
Route::post('/update/typology/{id}','TypologyController@update')
        ->name('typology-update');

