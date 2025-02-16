@extends('layout.layout')

@section("content")
        <!-- Main Wrapper -->
        <div class="flex flex-col md:flex-row">

            <!-- Left Sidebar -->
            <div class="w-full md:w-1/4 bg-blue-900 text-white p-6 ">

                <!-- Logo -->
                <h1 class="text-3xl font-bold mb-8">Twitter Clone</h1>

                <!-- Navigation Links -->
                <ul class="space-y-6">
                    <li><a href="#" class="text-lg hover:text-blue-300">Home</a></li>
                    <li><a href="#" class="text-lg hover:text-blue-300">Profile</a></li>
                    <li><a href="#" class="text-lg hover:text-blue-300">Messages</a></li>
                    <li><a href="#" class="text-lg hover:text-blue-300">Notifications</a></li>
                    <li><a href="#" class="text-lg hover:text-blue-300">Lists</a></li>
                    <li><a href="#" class="text-lg hover:text-blue-300">Bookmarks</a></li>
                    <li><a href="#" class="text-lg hover:text-blue-300">Topics</a></li>
                    <li><a href="#" class="text-lg hover:text-blue-300">Logout</a></li>
                </ul>
            </div>

            <!-- Center Feed Section -->
            <div class="flex-1 p-6 bg-white border-l border-r md:border-none">
                <!-- Create Tweet Section -->
                <div class="bg-white p-6 rounded-lg shadow-md mb-6">
                    <textarea class="w-full p-4 border border-gray-300 rounded-lg" placeholder="What's happening?" rows="4"></textarea>
                    <button class="mt-4 bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700">Tweet</button>
                </div>

                <!-- Tweets Feed -->
                <div class="space-y-4">

                    @foreach ( $tweets as $tweet)
                    <div class="bg-white p-4 rounded-lg shadow-md">
                      
                        <p class="mt-2">{{$tweet->content}}</p>
                        <p class="mt-2">{{$tweet->likes}}</p>
                        <p class="mt-2">{{$tweet->created_at}}</p>

                    </div>
                    @endforeach

                  
                </div>
            </div>

            <!-- Right Sidebar -->
            <div class="w-full md:w-1/4 bg-white p-6 border-l md:border-none">
                <!-- Search Bar -->
                <div class="mb-6">
                    <input type="text" class="w-full p-4 border border-gray-300 rounded-lg" placeholder="Search Twitter...">
                </div>

                <!-- Who to Follow Section -->
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <h3 class="font-semibold mb-4">Who to follow</h3>
                    <div class="space-y-4">
                        <div class="flex items-center space-x-4">
                            <img src="https://randomuser.me/api/portraits/men/35.jpg" alt="User Avatar" class="w-10 h-10 rounded-full">
                            <div>
                                <h4 class="font-semibold text-sm">Michael Scott</h4>
                                <p class="text-xs text-gray-500">Followed by Dwight</p>
                            </div>
                        </div>
                        <div class="flex items-center space-x-4">
                            <img src="https://randomuser.me/api/portraits/women/36.jpg" alt="User Avatar" class="w-10 h-10 rounded-full">
                            <div>
                                <h4 class="font-semibold text-sm">Pam Beesly</h4>
                                <p class="text-xs text-gray-500">Followed by Jim</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @endsection
