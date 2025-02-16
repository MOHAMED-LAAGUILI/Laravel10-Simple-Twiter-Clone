<?php

namespace App\Http\Controllers;

use App\Models\Tweet;
use App\Models\TweetsModel;
use Illuminate\Http\Request;

class DashboardController extends Controller
{

    public function index()
    {

    
      /*  $tweet = new Tweet([
            [ 'content'=> 'test1', 'likes'=> 1 ],
            [ 'content'=> 'test2', 'likes'=> 2 ]
         ]);         

$tweet->save();
*/
        return view("dashboard",['tweets' => Tweet::orderBy("created_at", "DESC")->get()]);

    }

}

