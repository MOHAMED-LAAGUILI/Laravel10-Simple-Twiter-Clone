<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Http\Requests\UpdateCommentRequest;
use App\Models\Tweet;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
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
    
        // Save the comment
        $comment->save();
        
        \Log::info('Comment saved:', ['comment' => $comment]);
    
        // Redirect back to the dashboard with success message
        return redirect()->route('tweet.show', $tweet->id)->with('success', 'Comment added!');
    }
    
    
    

    /**
     * Display the specified resource.
     */
    public function show(Comment $comment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comment $comment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCommentRequest $request, Comment $comment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comment $comment)
    {
        //
    }
}
