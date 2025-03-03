<div class="dark:bg-white bg-gray-900 shadow-lg rounded-2xl p-8 transition-all duration-300 ease-in-out">
    <!-- Profile Header -->
    <div class="flex items-center space-x-5">
        <img src="https://api.dicebear.com/9.x/adventurer/svg?seed={{ auth()->user()->name }}"
             alt="User Avatar"
             class="w-20 h-20 rounded-full border-4 border-gray-500 dark:border-gray-200 shadow-md">
        <div>
            <h2 class="text-2xl font-bold text-gray-50 dark:text-gray-900">{{ auth()->user()->name }}</h2>
            <p class="text-gray-400 dark:text-gray-600">{{'@'}}{{ auth()->user()->name }}</p>
        </div>
    </div>

    <!-- Profile Details -->
    <div class="mt-6">
        <h3 class="text-lg font-semibold text-gray-200 dark:text-gray-800">About Me</h3>
        <p class="text-gray-400 dark:text-gray-600 mt-2">
            {{ auth()->user()->bio ?? 'No bio available' }}
        </p>
    </div>

    <!-- User Stats -->
    <div class="mt-6 grid grid-cols-3 text-center gap-4">
        <div class="bg-gray-800 dark:bg-gray-100 p-3 rounded-lg shadow-sm">
            <h4 class="text-xl font-bold text-gray-50 dark:text-gray-900">{{$user->tweets()->count()}}</h4>
            <p class="text-gray-400 dark:text-gray-600">Posts</p>
        </div>
        <div class="bg-gray-800 dark:bg-gray-100 p-3 rounded-lg shadow-sm">
            <h4 class="text-xl font-bold text-gray-50 dark:text-gray-900">{{$user->comments()->count()}}</h4>
            <p class="text-gray-400 dark:text-gray-600">Comments</p>
        </div>
        <div class="bg-gray-800 dark:bg-gray-100 p-3 rounded-lg shadow-sm">
            <h4 class="text-xl font-bold text-gray-50 dark:text-gray-900">1</h4>
            <p class="text-gray-400 dark:text-gray-600">Following</p>
        </div>
    </div>

    <!-- Edit Profile Button -->
    @if (auth()->user()->id == $user->id)
    <div class="mt-6 text-center">
        <a href="{{ route('profile.edit', auth()->user()->id) }}"
            class="bg-gradient-to-r from-purple-600 to-indigo-600 text-white py-2 px-5 rounded-xl shadow-md hover:opacity-90 transition-all">
            Edit Profile
        </a>
    </div>
    @endif

    @auth
        @if (Auth::id() !== $user->id)
            <!-- Follow Button -->
            <div class="mt-6 text-center">
                <a href="#"
                   class="bg-gradient-to-r from-purple-600 to-indigo-600 text-white py-2 px-5 rounded-xl shadow-md hover:opacity-90 transition-all">
                    Follow
                </a>
            </div>
        @endif
    @endauth
</div>
