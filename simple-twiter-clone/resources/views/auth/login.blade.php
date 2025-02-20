@extends('layout.layout')

@section('content')
<section class="dark:bg-gray-900 text-gray-300 flex items-center justify-center min-h-screen px-4">
    
    <!-- Register 
        <div id="register-form" class="w-full max-w-md p-8 space-y-6 bg-gray-800 rounded-xl shadow-2xl transition-all duration-300">
            <h2 class="text-3xl font-extrabold text-center text-white">Create an Account</h2>
            <p class="text-center text-sm text-gray-400">Sign up to get started</p>
            
            <form class="space-y-5" method="POST" action="{{ route('register.store') }}">
                @csrf
                <div>
                    <label class="block mb-1 text-sm font-medium">Username</label>
                    <input name="name" type="text" class="input-field">
                </div>
                <div>
                    <label class="block mb-1 text-sm font-medium">Email</label>
                    <input name="email" type="email" class="input-field">
                </div>
                <div>
                    <label class="block mb-1 text-sm font-medium">Password</label>
                    <input name="password" type="password" class="input-field">
                </div>
                <div>
                    <label class="block mb-1 text-sm font-medium">Confirm Password</label>
                    <input name="password_confirmation" type="password" class="input-field">
                </div>
                <button type="submit" class="submit-button">Register</button>
            </form>

            <p class="mt-4 text-center text-sm text-white">
                Already have an account?
                <a href="#" id="toggle-login" class="text-indigo-400 hover:text-indigo-300 transition-all duration-200">Login</a>
            </p>
        </div>
            Form -->

    <!-- Login Form -->
<div id="login-form" class="w-full max-w-md p-8 space-y-6 bg-gray-800 rounded-xl shadow-2xl transition-all duration-300">
    <h2 class="text-3xl font-extrabold text-center text-white">Welcome Back</h2>
    <p class="text-center text-sm text-gray-400">Sign in to continue</p>

    <form class="space-y-5" method="POST" action="">
        @csrf
        <div>
            <label class="block mb-1 text-sm font-medium text-white">Email</label>
            <input name="email" type="email"
                class="w-full p-3 bg-gray-700 border border-gray-600 rounded-lg outline-none transition-all duration-200 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500">
        </div>
        <div>
            <label class="block mb-1 text-sm font-medium text-white">Password</label>
            <input name="password" type="password"
                class="w-full p-3 bg-gray-700 border border-gray-600 rounded-lg outline-none transition-all duration-200 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500">
        </div>
        <button type="submit"
            class="w-full p-3 bg-indigo-500 text-white font-semibold rounded-lg shadow-lg transition-all duration-300 hover:bg-indigo-600">
            Login
        </button>
    </form>

    <p class="mt-4 text-center text-sm text-white">
        Don't have an account?
        <a href="#" id="toggle-register"
            class="text-indigo-400 hover:text-indigo-300 transition-all duration-200">Register</a>
    </p>
</div>

    
    <!-- Login 
        <script>
            document.getElementById("toggle-login").addEventListener("click", function(event) {
            event.preventDefault();
            document.getElementById("register-form").classList.add("hidden");
            document.getElementById("login-form").classList.remove("hidden");
        });

        document.getElementById("toggle-register").addEventListener("click", function(event) {
            event.preventDefault();
            document.getElementById("login-form").classList.add("hidden");
            document.getElementById("register-form").classList.remove("hidden");
        });
    </script>

    Form -->
  
@endsection
