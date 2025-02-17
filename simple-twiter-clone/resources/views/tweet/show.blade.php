@extends('layout.layout')

@section('content')
    <div class="flex flex-col md:flex-row min-h-screen bg-gray-100">

        <!-- Left Sidebar -->
        <div class="w-full md:w-1/4 bg-white p-6 border-r md:sticky md:top-0 md:h-screen">
           
            <!-- Navigation Links -->
            <ul class="space-y-6 text-lg font-medium">
                <li><a href="#" class="flex items-center space-x-2 hover:text-blue-500"><i
                            class="fas fa-home"></i><span>Home</span></a></li>
                <li><a href="#" class="flex items-center space-x-2 hover:text-blue-500"><i
                            class="fas fa-user"></i><span>Profile</span></a></li>
                <li><a href="#" class="flex items-center space-x-2 hover:text-blue-500"><i
                            class="fas fa-envelope"></i><span>Messages</span></a></li>
                <li><a href="#" class="flex items-center space-x-2 hover:text-blue-500"><i
                            class="fas fa-bell"></i><span>Notifications</span></a></li>
                <li><a href="#" class="flex items-center space-x-2 hover:text-blue-500"><i
                            class="fas fa-bookmark"></i><span>Bookmarks</span></a></li>
                <li><a href="#" class="flex items-center space-x-2 hover:text-blue-500"><i
                            class="fas fa-hashtag"></i><span>Explore</span></a></li>
                   </ul>
        </div>

      <!-- Center Feed -->
<div class="flex-1 p-6 min-w-[40%]">
 
    <!-- Tweets Feed -->
    <div class="space-y-4">
            @include('shared.tweet_card')

     
    </div>
</div>


        <!-- Right Sidebar -->
        <div class="w-full md:w-1/4 p-6 border-l md:sticky md:top-0 md:h-screen bg-white">
            <!-- Search Bar -->
            <div class="mb-6">
                <input type="text" class="w-full p-3 border border-gray-300 rounded-lg" placeholder="Search Twitter...">
            </div>

            <!-- Who to Follow -->
            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="font-semibold text-lg mb-4">Who to Follow</h3>
                <div class="space-y-4">
                    <div class="flex items-center space-x-4">
                        <img src="https://randomuser.me/api/portraits/men/35.jpg" alt="User Avatar"
                            class="w-10 h-10 rounded-full">
                        <div class="flex-1">
                            <h4 class="font-semibold text-sm">Michael Scott</h4>
                        </div>
                        <button class="text-blue-500 hover:text-blue-600 font-bold">+</button>
                    </div>

                    <div class="flex items-center space-x-4">
                        <img src="https://randomuser.me/api/portraits/women/36.jpg" alt="User Avatar"
                            class="w-10 h-10 rounded-full">
                        <div class="flex-1">
                            <h4 class="font-semibold text-sm">Pam Beesly</h4>                        </div>
                        <button class="text-blue-500 hover:text-blue-600 font-bold">+</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
