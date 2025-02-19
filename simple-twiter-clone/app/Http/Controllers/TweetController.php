<?php

namespace App\Http\Controllers;

use App\Models\Tweet;

class TweetController extends Controller
{
    public function store(Tweet $tweet)
    {
        // Validate the content
        $validated = request()->validate([
            'content' => 'required|max:280|min:5', // Add your validation rules here
        ]);

        $tweet->create( $validated );

         return redirect()->route('dashboard')->with('success', 'Tweet posted!');
    }

    public function destroy(Tweet $tweet)
    {
        $tweet->delete();
        // redirect
        return redirect()->route('dashboard')->with('success', 'Tweet Deleted!');
    }

    public function show(Tweet $tweet)
    {
        // Check if the route is an edit view or not
        $editing = request()->routeIs('tweet.edit');
        return view("tweet.show", ["tweet" => $tweet, "editing" => $editing]);
    }


    public function update(Tweet $tweet)
    {
        // Validate the content
        $validated = request()->validate([
            'content' => 'required|string|max:280|min:5', // Add your validation rules here
        ]);

        $tweet->update($validated);
        
        return redirect()->route('tweet.show', $tweet->id)->with('success', 'Tweet updated!');
    }
}
