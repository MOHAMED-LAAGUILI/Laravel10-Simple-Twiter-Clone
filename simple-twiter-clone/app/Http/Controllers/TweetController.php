<?php

namespace App\Http\Controllers;

use App\Models\Tweet;
use Symfony\Component\HttpKernel\Exception\HttpException;

class TweetController extends Controller
{
    public function store(Tweet $tweet)
    {
        // Validate the content
        $validated = request()->validate([
            'content' => 'required|max:280|min:5', // Add your validation rules here
        ]);

        $validated['user_id']= auth()->id();
        $tweet->create( $validated );

         return redirect()->route('dashboard')->with('success', 'Tweet posted!');
    }

    public function destroy(Tweet $tweet)
    {
        if (auth()->id() !== $tweet->user_id) {

abort(404);
        }
        $tweet->delete();
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

        if (auth()->id() !== $tweet->user_id) {
            //throw new HttpException(403, 'You do not have permission to access this tweet.');
            return redirect()->route('tweet.show', $tweet->id)->with('error', 'You do not have permission to access this tweet.');
        }

        // Validate the content
        $validated = request()->validate([
            'content' => 'required|string|max:280|min:5', // Add your validation rules here
        ]);

        $validated['user_id']= auth()->id();

        $tweet->update($validated);
        
        return redirect()->route('tweet.show', $tweet->id)->with('success', 'Tweet updated!');
    }
}
