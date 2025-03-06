<?php

namespace App\Http\Controllers;

use App\Mail\WelcomeEmail;
use App\Models\Auth;
use App\Http\Requests\StoreAuthRequest;
use App\Http\Requests\UpdateAuthRequest;
use App\Models\User;
use Hash;
use Illuminate\Support\Facades\Mail;

class AuthController extends Controller
{


    public function register()
    {
        return view('auth.register');
    }
    public function login()
    {
        return view('auth.login');
    }
    public function authentication()
    {
        // Validate input
        $validated = request()->validate([
            'email' => 'required|email',
            'password' => 'required|min:8|max:20'
        ]);
    
        // Attempt login
        if (auth()->attempt($validated)) {
            request()->session()->regenerate();
            return redirect()->route('dashboard')->with('success', 'Login successfully!');
        }
    
        return redirect()->route('login.show')->withErrors([
            'email' => 'Email or password is incorrect',
        ]);
    }
    

    public function store()
    {
        // Validate input
        $validated = request()->validate([
            'name' => 'required|min:3|max:20',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|confirmed|min:8|max:20'
        ]);
    
        // Hash the password before storing
        $validated['password'] = Hash::make($validated['password']);
    
        // Create the user and store it in a variable
        $user = User::create($validated);
    
        // Now send the welcome email using the newly created user's email
        Mail::to($user->email)->send(new WelcomeEmail($user));
    
        return redirect()->route('login.show')->with('success', 'Account created successfully!');
    }
    


    public function logout(User $user)
    {
        auth()->logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();

        return redirect()->route('login.show')->with('success', 'logout successfully!');
    }


}
