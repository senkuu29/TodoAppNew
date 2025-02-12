<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\TaskList;


class TaskListSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         // ini adalah data sementara task_list
         $lists = [
            [
                'name' => 'MDPL', //dengan nama ini
            ]
        ];

        TaskList::insert($lists);
    }
}
