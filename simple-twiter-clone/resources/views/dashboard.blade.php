<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Twitter Clone - Dashboard</title>

        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @else
      
        @endif
        
    </head>
    <body class="font-sans antialiased dark:bg-black dark:text-white bg-gray-100 text-gray-900 ">
        @include('layout.navbar')

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
                    <!-- Example Tweet 1 -->
                    <div class="bg-white p-4 rounded-lg shadow-md">
                        <div class="flex items-center space-x-4">
                            <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="User Avatar" class="w-10 h-10 rounded-full">
                            <div>
                                <h3 class="font-semibold">John Doe</h3>
                                <p class="text-sm text-gray-500">2 hours ago</p>
                            </div>
                        </div>
                        <p class="mt-2">This is an example tweet content. Look at how elegant the design looks!</p>
                    </div>

                    <!-- Example Tweet 2 -->
                    <div class="bg-white p-4 rounded-lg shadow-md">
                        <div class="flex items-center space-x-4">
                            <img src="https://randomuser.me/api/portraits/men/33.jpg" alt="User Avatar" class="w-10 h-10 rounded-full">
                            <div>
                                <h3 class="font-semibold">Jane Smith</h3>
                                <p class="text-sm text-gray-500">5 hours ago</p>
                            </div>
                        </div>
                        <p class="mt-2">Here's another tweet, just an example of how the feed works.</p>
                    </div>

                    <!-- Example Tweet 3 -->
                    <div class="bg-white p-4 rounded-lg shadow-md">
                        <div class="flex items-center space-x-4">
                            <img src="https://randomuser.me/api/portraits/men/34.jpg" alt="User Avatar" class="w-10 h-10 rounded-full">
                            <div>
                                <h3 class="font-semibold">Alice Johnson</h3>
                                <p class="text-sm text-gray-500">8 hours ago</p>
                            </div>
                        </div>
                        <p class="mt-2">This is a sample tweet to show the layout and style. It feels quite smooth, right?</p>
                    </div>
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

    </body>
</html>
