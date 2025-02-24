<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Http\Requests\UpdateCommentRequest;
use App\Models\Tweet;
use Illuminate\Http\Request;

class CommentController extends Controller
{
  
    public function store(Tweet $tweet)
    {    
        // Validate the request
        $validatedData = request()->validate([
            'content' => 'required|string|max:255',
        ]);
    
        // Create a new comment
        $comment = new Comment();
        $comment->tweet_id = $tweet->id; // This should set the correct tweet ID
        $comment->content = $validatedData['content']; 
        $comment->user_id = auth()->id();

        // Save the comment
        $comment->save();
        
//        \Log::info('Comment saved:', ['comment' => $comment]);
    
        // Redirect back to the dashboard with success message
        return redirect()->route('tweet.show', $tweet->id)->with('success', 'Comment added!');
    }
    
    
    
}
