<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\TaskList;
use Illuminate\Http\Request;


class TaskController extends Controller
{
    public function index(Request $request)
    {
        // Mengambil nilai query pencarian dari request
        $query = $request->input('query');
    
        if ($query) {
            // Mencari tugas (tasks) berdasarkan nama atau deskripsi yang mengandung query
            $tasks = Task::where('name', 'like', "%{$query}%")
                ->orWhere('description', 'like', "%{$query}%")
                ->latest() // Urutkan dari yang terbaru
                ->get();
    
            // Mencari daftar tugas (task lists) yang namanya cocok dengan query
            // atau memiliki tugas yang sesuai dengan query
            $lists = TaskList::where('name', 'like', "%{$query}%")
                ->orWhereHas('tasks', function ($q) use ($query) {
                    $q->where('name', 'like', "%{$query}%")
                        ->orWhere('description', 'like', "%{$query}%");
                })
                ->with('tasks') // Memuat relasi tasks untuk daftar tugas yang ditemukan
                ->get();
    
            if ($tasks->isEmpty()) {
                // Jika tidak ada tugas yang ditemukan, tetap muat daftar tugas beserta tugasnya
                $lists->load('tasks');
            } else {
                // Jika ada tugas yang cocok, hanya muat tugas yang sesuai dengan query dalam daftar tugas
                $lists->load(['tasks' => function ($q) use ($query) {
                    $q->where('name', 'like', "%{$query}%")
                        ->orWhere('description', 'like', "%{$query}%");
                }]);
            }
        } else {
            // Jika tidak ada pencarian, ambil semua tugas terbaru dan daftar tugas beserta tugasnya
            $tasks = Task::latest()->get();
            $lists = TaskList::with('tasks')->get();
        }
    
        // Menyiapkan data untuk dikirim ke view
        $data = [
            'title' => 'Home',
            'lists' => $lists,
            'tasks' => $tasks,
            'priorities' => Task::PRIORITIES
        ];
    
        // Menampilkan halaman home dengan data yang telah difilter
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

    // fitur update
    public function update(Request $request, $id) {
        $request->validate([
            'name' => 'required|max:100',
            'description' => 'required|max:100',
            'priority' => 'required|in:low,medium,high',
        ]);
    
        $task = Task::findOrFail($id);
        $task->update([
            'name' => $request->name,
            'description' => $request->description,
            'priority' => $request->priority
        ]);
    
        return redirect()->back();
    }

   
    
}
