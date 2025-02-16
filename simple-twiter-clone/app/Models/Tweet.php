<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tweet extends Model
{
    use HasFactory;

    protected $table = 'tweets'; // Ensure it points to the correct table
    
    protected $fillable = [
        'content',
        'likes',
    ];

}
