<?php

namespace App\Http\Controllers;

use App\Models\Tweet;
use App\Models\User;


class DashboardController extends Controller
{

    public function index()
    {
    $tweets = Tweet::orderBy("created_at", "DESC");

    if (request()->has('search')) {
        $tweets =  $tweets->where('content','like' , '%'. request()->get('search','') . '%');
    }
   
        return view("dashboard",['tweets' => $tweets->paginate(4)]);

    }

}

