<?php

namespace App\Http\Controllers;

use App\Models\TaskList;
use Illuminate\Http\Request;

class TaskListController extends Controller
{
     // store
     public function store(Request $request) {
        $request->validate([
            'name' => 'required|max:100',
        ]);

        TaskList::create([
            'name' => $request->name,
        ]);

        return redirect()->back();
    }

     // menghapus data dari database
     public function destroy($id) {
        TaskList::findOrFail($id)->delete();

        return redirect()->back();
    }
}
