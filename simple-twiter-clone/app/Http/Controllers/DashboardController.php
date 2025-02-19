<?php

namespace App\Http\Controllers;

use App\Models\Tweet;


class DashboardController extends Controller
{

    public function index(Tweet $tweet)
    {
    $tweets = $tweet->orderBy("created_at", "DESC");
    
    if (request()->has('search')) {
        $tweets =  $tweets->where('content','like' , '%'. request()->get('search','') . '%');
    }
   
        return view("dashboard",['tweets' => $tweets->paginate(4)]);

    }

}

