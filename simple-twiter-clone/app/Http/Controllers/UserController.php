<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(User $user)
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(User $user)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        return view('user.profile', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        return view('user.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */public function update(User $user)
{
    // Validate the inputs
    $validated = request()->validate([
        'name' => 'required|min:3|max:40',
        'bio' => 'required|min:5|max:255',
        'image' => 'nullable|image|max:2048', // Optional image validation
    ]);

    // Handle the image upload if it exists
    if (request()->hasFile('image')) {
        // Store the image and get its path
        $imagePath = request()->file('image')->store('profile', 'public');
        $validated['image'] = $imagePath;
    }

    // Update the user with the validated data
    $user->update($validated);

    // Redirect back to the user's profile page
    return redirect()->route("user.profile", ['user' => $user]);
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}
