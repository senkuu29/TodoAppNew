<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\TaskList;
use Illuminate\Http\Request;


class TaskController extends Controller
{
    // index
    public function index() {
        $data = [
            'title' => 'Home',
            'lists' => TaskList::all(),
            'tasks' => Task::orderBy('created_at', 'desc')->get(),
            'priorities' => Task::PRIORITIES
        ];

        return view('pages.home', $data);
    }

     // kirim task
     public function store(Request $request) {
        $request->validate([
            'name' => 'required|max:100',
            'description' => 'required|max:100',
            'priority' => 'required|in:low,medium,high',
            'list_id' => 'required'
        ]);

        Task::create([
            'name' => $request->name,
            'description' => $request->description,
            'priority' => $request->priority,
            'list_id' => $request->list_id
        ]);

        return redirect()->back();
    }

}
