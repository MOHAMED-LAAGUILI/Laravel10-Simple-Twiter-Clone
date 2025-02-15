<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{

    public function index()
    {

        $users = [
            ['name' => 'Alex', 'age' => 25],
            ['name' => 'Adam', 'age' => 30],
            ['name' => 'Sophia', 'age' => 22],
            ['name' => 'John', 'age' => 28],
            ['name' => 'Emily', 'age' => 35],
            ['name' => 'Michael', 'age' => 40],
            ['name' => 'Liam', 'age' => 27],
            ['name' => 'Ava', 'age' => 24],
            ['name' => 'James', 'age' => 32],
            ['name' => 'Olivia', 'age' => 26],
        ];


        return view("dashboard",  ['users'=>$users]);

    }

}

