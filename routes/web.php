<?php

use App\Http\Controllers\TaskController;
use App\Http\Controllers\TaskListController;
use Illuminate\Support\Facades\Route;
use App\Models\Task;

// Resource route untuk TaskListController
// Ini secara otomatis membuat route untuk operasi CRUD pada daftar tugas (lists)
Route::resource('lists', TaskListController::class);
