@extends('layout.layout')

@section('content')
    <section class="dark:bg-gray-900 text-gray-300 flex items-center justify-center min-h-screen px-4">


        <div class=" w-full max-w-md p-8 space-y-6 bg-gray-800 rounded-xl shadow-2xl transition-all duration-300"
            id="register-form">
            <h2 class="text-3xl font-extrabold text-center text-white">Create an Account</h2>
            <p class="text-center text-sm text-gray-400">Sign up to get started</p>

            <form class="space-y-5" method="POST" action="{{ route('register.store') }}">
                @csrf
                <div>
                    <label class="block mb-1 text-sm font-medium">Username</label>
                    <input name="name" type="text"
                        class="w-full px-4 py-3 bg-gray-700 border border-gray-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition-all duration-200">
                    @error('name')
                        <p class="text-red-500 text-sm">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label class="block mb-1 text-sm font-medium">Email</label>
                    <input name="email" type="email"
                        class="w-full px-4 py-3 bg-gray-700 border border-gray-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition-all duration-200">
                    @error('email')
                        <p class="text-red-500 text-sm">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label class="block mb-1 text-sm font-medium">Password</label>
                    <input name="password" type="password"
                        class="w-full px-4 py-3 bg-gray-700 border border-gray-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition-all duration-200">

                    @error('password')
                        <p class="text-red-500 text-sm">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label class="block mb-1 text-sm font-medium">Confirm Password</label>
                    <input name="password_confirmation" type="confirm-password"
                        class="w-full px-4 py-3 bg-gray-700 border border-gray-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition-all duration-200">
                    @error('password_confirmation')
                        <p class="text-red-500 text-sm">{{ $message }}</p>
                    @enderror

                </div>

                <button type="submit"
                    class="w-full py-3 mt-4 bg-indigo-600 hover:bg-indigo-500 text-white font-semibold rounded-lg shadow-md transition-all duration-300">Register</button>
            </form>

            <p class="mt-4 text-center text-sm text-white">
                Already have an account?
                <a href="#" class="text-indigo-400 hover:text-indigo-300 transition-all duration-200">Login</a>
            </p>
        </div>
    </section>
@endsection
