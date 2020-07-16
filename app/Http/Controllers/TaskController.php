<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class TaskController extends Controller
{
    public function index() {
        $tasks = Task::all();
        return view('welcome', compact('tasks'));
    }

    public function store(Request $request) {
        Task::create([
            'name' => $request->name
        ]);
        return redirect()->back();
    }

    public function edit($id) {
        $task = Task::find($id);
        return view('edit', compact('task'));
    }

    public function update(Request $request) {
        Task::where('id', $request->id)->update([
            'name' => $request->name
        ]);
        return redirect()->route('index');
    }

    public function delete($id) {
        $task = Task::find($id);
        $task->delete();
        return redirect()->route('index');
    }
}
