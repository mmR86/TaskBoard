<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    // GET api/tasks
    public function index() {
        return Task::all();
    }

    // POST api/task
    public function store(Request $request) {
        $task = Task::create($request->all());

        return response()->json($task, 201);
    }
}
