<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TasksController extends Controller
{ 
    public function index() {
        return view('tasks.index');
    }

    public function create() {
        return view('tasks.create');
    }

    public function store() {
        return 'done!';
    }

    // Handle the tasks submission data

    // Create a task 

    // Display a list of tasks

    // Mark a task as complete

    // Divide the tasks into completed and not completed section

    // Delete a task permanently
}
