<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tweet extends Model
{
    use HasFactory;

    // Define the database table associated with this model
    protected $table = 'tweets';

    // Prevents these fields from being mass-assigned
    protected $guarded = [
        'id',         // Prevents mass assignment of the primary key
        'created_at', // Prevents modification of the creation timestamp
        'updated_at'  // Prevents modification of the update timestamp
    ];

    // Specifies the fields that can be mass-assigned
    protected $fillable = [
        'user_id',
        'content', // Stores the tweet's text
        'likes',   // Stores the number of likes
    ];

    // Default attribute values if not provided
    protected $attributes = [
        'content' => 'No content available', // Default tweet content
        'likes' => 0, // Default likes count
    ];

    /**
     * Define a one-to-many relationship with the Comment model.
     * A tweet can have multiple comments.
     */
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
