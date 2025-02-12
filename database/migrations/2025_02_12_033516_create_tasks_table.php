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
       // ini adalah table tasks
       Schema::create('tasks', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->string('description')->nullable();
        $table->boolean('is_completed')->default(false);
        $table->enum('priority', ['low', 'medium', 'high'])->default('medium');
        $table->timestamps();

        $table->foreignId('list_id')->constrained('task_lists', 'id')->onDelete('cascade');
    });
    }

    /**
     * Reverse the migrations.
     */
     //  ini adalah untuk menghapus tabel tasks
     public function down(): void
     {
         Schema::dropIfExists('tasks'); //memastikan bahwa tabel hanya akan dihapus jika memang ada, sehingga tidak menyebabkan error jika tabel tidak ditemukan.
     }
};
