<?php

use Illuminate\Support\Facades\Route;


// Employee
Route::get('/', 'EmployeeController@index')
        ->name('emp-index');

Route::get('/epm/{id}', 'EmployeeController@show')
        ->name('emp-show');
