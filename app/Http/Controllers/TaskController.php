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

    // digunakan untuk menandai suatu tugas (task) sebagai selesai
    public function complete($id) {
        Task::findOrFail($id)->update([  //Jika task dengan ID tersebut ditemukan, maka data akan dikembalikan.Jika tidak ditemukan, Laravel akan otomatis melempar error 404 Not Found.
            'is_completed' => true
        ]);

        return redirect()->back();
    }

     // menghapus task sesuai id
     public function destroy($id) {
        Task::findOrFail($id)->delete();

        return redirect()->back();
    }

    // fitur detail -> deskripsi
    public function show($id){
        $task = Task::findOrFail($id); 
        $data = [
            'title' => 'Details',
            'task' => $task,

        ];
        return view('pages.details', $data);
    }

    // fitur edit
    public function edit($id) {
        $task = Task::findOrFail($id);
        return response()->json($task);
    }
}
