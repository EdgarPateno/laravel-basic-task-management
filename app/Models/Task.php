<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = [
        'title', 'description', 'completed' // Add 'completed' to the $fillable array
    ];

    protected $casts = [
        'completed' => 'boolean', // Add this line to cast the 'completed' attribute to a boolean
    ];
}
