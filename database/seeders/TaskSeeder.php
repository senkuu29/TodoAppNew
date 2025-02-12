<?php


namespace Database\Seeders;

use App\Models\Task;
use App\Models\TaskList;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tasks = [
            [
                'name' => 'Papandayan',
                'description' => 'Sebelum masuk Semester Genap Kelas Dua Belas RPL',
                'is_completed' => true,
                'priority' => 'medium',
                'list_id' => TaskList::where('name', 'MDPL')->first()->id,
            ],
            [
                'name' => 'Gn. Putri',
                'description' => 'Sesudah menjelang masuk Semester Ganjil Dua Belas RPL',
                'is_completed' => false,
                'priority' => 'medium',
                'list_id' => TaskList::where('name', 'MDPL')->first()->id,
            ],
            [
                'name' => 'Gn. Canggah',
                'description' => 'sesudah beres Sekolah',
                'is_completed' => false,
                'priority' => 'medium',
                'list_id' => TaskList::where('name', 'MDPL')->first()->id,
            ],
            [
                'name' => 'Gn. Gede',
                'description' => 'sesudah beres Sekolah',
                'is_completed' => false,
                'priority' => 'medium',
                'list_id' => TaskList::where('name', 'MDPL')->first()->id,
            ],
            [
                'name' => 'Gn. Ciremai',
                'description' => 'sesudah lebaran kita gas hiking bersama Tutut, Feri, Tami, Elgin dan Ikhsan',
                'is_completed' => false,
                'priority' => 'medium',
                'list_id' => TaskList::where('name', 'MDPL')->first()->id,
            ],
            
        ];

        Task::insert($tasks);
    }
}
