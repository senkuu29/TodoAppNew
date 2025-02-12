<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    
     // many-to-one (antara model Task dan model TaskList)
     public function list() {
        return $this->belongsTo(TaskList::class, 'list_id');
    }
}
