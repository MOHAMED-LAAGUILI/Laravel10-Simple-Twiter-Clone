<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    /** @use HasFactory<\Database\Factories\CommentFactory> */
    use HasFactory;

    // Define the database table associated with this model
    protected $table = 'comments';

    // Prevents these fields from being mass-assigned
    protected $guarded = [
        'id',         // Prevents mass assignment of the primary key
        'created_at', // Prevents modification of the creation timestamp
        'updated_at'  // Prevents modification of the update timestamp
    ];

    // Specifies the fields that can be mass-assigned
    protected $fillable = [
        'tweet_id', // The ID of the associated tweet
        'content',  // The comment content
    ];

    /**
     * Define a many-to-one relationship with the Tweet model.
     * Each comment belongs to a single tweet.
     */
    public function tweet()
    {
        return $this->belongsTo(Tweet::class, 'tweet_id', 'id');
    }
}
