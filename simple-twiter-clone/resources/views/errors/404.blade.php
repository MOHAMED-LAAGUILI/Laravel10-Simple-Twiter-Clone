@extends('layout.layout')
@section(section: 'content')

<div class="flex flex-col items-center justify-center h-screen  dark:bg-gray-800 px-6 py-12">
    <div class="text-center max-w-lg w-full">
        <!-- Error Code -->
        <h1 class="text-6xl font-extrabold text-red-600 dark:text-red-500">404</h1>
        
        <!-- Error Message -->
        <p class="text-xl text-gray-700 dark:text-gray-300 mt-4 font-medium">
            Oops! The page you are looking for doesn't exist.
        </p>
        
        <!-- Illustration or Icon (optional for visual appeal) -->
        <div class="mt-8 mb-6">
            <img src="https://www.wp-assistance.fr/files/2023/05/erreur-404-WordPress.jpg" alt="404 Illustration" class="w-52 h-52 mx-auto opacity-75">
        </div>
        
        <!-- Call to Action Button -->
        <a href="{{ url('/') }}" class="inline-block px-6 py-3 mt-6 text-lg font-semibold text-white bg-blue-600 rounded-lg shadow-lg hover:bg-blue-700 transition duration-300 transform hover:scale-105">
            Go Back Home
        </a>
        
        <!-- Optional Additional Navigation (can be added as needed) -->
        <div class="mt-4">
            <p class="text-sm text-gray-500 dark:text-gray-400">
                Or try going back to a previous page.
            </p>
        </div>
    </div>
</div>
@endsection
