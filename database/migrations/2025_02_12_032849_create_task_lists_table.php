<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
      // ini adalah table task_lists
      Schema::create('task_lists', function (Blueprint $table) {
        $table->id();
        $table->string('name')->unique();
        $table->timestamps();
    });
    }

    /**
     * Reverse the migrations.
     */
    //  ini adalah untuk menghapus tabel task_list
    public function down(): void
    {
        Schema::dropIfExists('task_lists'); //memastikan bahwa tabel hanya akan dihapus jika memang ada, sehingga tidak menyebabkan error jika tabel tidak ditemukan.
    }
};
