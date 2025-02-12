<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TaskList extends Model
{
    
     // many-to-many (antara model TaskList dan model Task)
    public function tasks() {
        return $this->hasMany(Task::class, 'list_id');
    }
}
