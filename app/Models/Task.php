<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    
    //  untuk menentukan atribut mana yang boleh diisi secara massal (mass assignment).
    protected $fillable = [
        'name',
        'description',
        'is_completed',
        'priority',
        'list_id'
    ];

     // many-to-one (antara model Task dan model TaskList)
     public function list() {
        return $this->belongsTo(TaskList::class, 'list_id');
    }
}
