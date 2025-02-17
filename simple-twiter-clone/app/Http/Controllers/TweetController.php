<?php

namespace App\Http\Controllers;

use App\Models\Tweet;
use Illuminate\Http\Request;

class TweetController extends Controller
{
    public function store(Request $request)
    {
        // Validate the content
        $validated = $request->validate([
            'content' => 'required|string|max:280|min:5', // Add your validation rules here
        ]);

        // Check if validation was successful, if any errors are present
        if ($validated) {
            // Validation passed, save the tweet
            $tweet = new Tweet();
            $tweet->content = $request->content; // Use 'content' which matches the textarea name
            $tweet->likes = 0; // Default likes
            $tweet->save();

            return redirect()->route('dashboard')->with('success', 'Tweet posted!');
        }

        // If validation fails, return errors and input
        return redirect()->back()->withErrors($validated)->withInput();
    }

    public function destroy(Tweet $id)
    {
        // Find the tweet by ID and Delete the tweet ($id)
        //  $tweet = Tweet::where('id',$id)->firstOrFail()->delete();

        // shorter way whene added Tweet In params (Tweet $id)
        $id->delete();

        // redirect
        return redirect()->route('dashboard')->with('success', 'Tweet Deleted!');
    }


    public function show(Tweet $id)
    {
        return view("tweet.show", ["tweet" => $id]);
        
    }
}
