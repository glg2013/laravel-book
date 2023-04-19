<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TasksController extends Controller
{
    public function index()
    {
        //return 'Hello, World!';
        return view('tasks.index')->with('tasks', 9999);
    }
}
