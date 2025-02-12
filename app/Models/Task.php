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
    
    //  digunakan untuk melindungi atribut tertentu agar tidak bisa diisi secara massal (mass assignment protection)
    protected $guarded = [
        'id',
        'created_at',
        'updated_at'
    ];

    // priorty
    const PRIORITIES = [
        'low',
        'medium',
        'high'
    ];
    
    //digunakan untuk mengubah nilai atribut priority menjadi sebuah kelas CSS 
    public function getPriorityClassAttribute() {
        return match($this->attributes['priority']) {
            'low' => 'success',
            'medium' => 'warning',
            'high' => 'danger',
            default => 'secondary'
        };
    }

    // many-to-one (antara model Task dan model TaskList)
     public function list() {
        return $this->belongsTo(TaskList::class, 'list_id');
    }
}
