<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('tasks.index');
});

Route::get('/tasks/create', function(){
    return view('tasks.create');
});

// php artisan serve at the terminal to run the app

// Replace the homepage

// Create a task 

// Display a list of tasks

// Mark a task as complete

// Divide the tasks into completed and not completed section

// Delete a task permanently