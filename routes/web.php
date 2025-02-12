<?php

use App\Http\Controllers\TaskController;
use App\Http\Controllers\TaskListController;
use Illuminate\Support\Facades\Route;
use App\Models\Task;

// Membuat route untuk home
Route::get('/', [TaskController::class, 'index'])->name('home');

// Resource route untuk TaskListController
// Ini secara otomatis membuat route untuk operasi CRUD pada daftar tugas (lists)
Route::resource('lists', TaskListController::class);

// Resource route untuk TaskController
// Ini secara otomatis membuat route untuk operasi CRUD pada tugas (tasks)
Route::resource('tasks', TaskController::class);

// Route khusus untuk menandai tugas sebagai selesai
// Menggunakan metode PATCH karena hanya memperbarui sebagian data
Route::patch('/tasks/{task}/complete', [TaskController::class, 'complete'])->name('tasks.complete');

// Route untuk menampilkan form edit tugas tertentu
// Menggunakan metode GET karena hanya menampilkan halaman
Route::get('/tasks/{task}/edit', [TaskController::class, 'edit'])->name('tasks.edit');
