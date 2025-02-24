<div class="dark:bg-white bg-gray-800 shadow-md rounded-lg p-6">
    <!-- Profile Header -->
    <div class="flex items-center space-x-4">
        <img src="https://api.dicebear.com/9.x/adventurer/svg?seed={{ auth()->user()->name }}"
             alt="User Avatar"
             class="w-16 h-16 rounded-full border border-gray-300">
        <div>
            <h2 class="text-xl font-semibold text-gray-100">{{ auth()->user()->name }}</h2>
            <p class="text-gray-100">@ {{ auth()->user()->name }}</p>
        </div>
    </div>

    <!-- Profile Details -->
    <div class="mt-6">
        <h3 class="text-lg font-semibold text-gray-300">About Me</h3>
        <p class="text-gray-300 mt-2">
            {{ auth()->user()->bio ?? 'No bio available' }}
        </p>
    </div>

    <!-- User Stats -->
    <div class="mt-6 grid grid-cols-3 text-center">
        <div>
            <h4 class="text-lg font-semibold text-gray-100">{{ auth()->user()->tweets()->count() }}</h4>
            <p class="text-gray-300">Posts</p>
        </div>
        <div>
            <h4 class="text-lg font-semibold text-gray-100">{{ auth()->user()->comments()->count() }}</h4>
            <p class="text-gray-300">Comments</p>
        </div>
        <div>
            <h4 class="text-lg font-semibold text-gray-100">1</h4>
            <p class="text-gray-300">Following</p>
        </div>
    </div>

    <!-- Edit Profile Button -->
    <div class="mt-6">
        <a href="{{ route('profile.edit',  auth()->user()->id) }}"
           class="bg-purple-700 text-white py-2 px-4 rounded-lg hover:bg-purple-900 transition">
            Edit Profile
        </a>
    </div>

    @auth
        @if (Auth::id() !== $user->id)
            <!-- Follow Button -->
            <div class="mt-6">
                <a href="#"
                   class="bg-purple-700 text-white py-2 px-4 rounded-lg hover:bg-purple-900 transition">
                    Follow
                </a>
            </div>
        @endif
    @endauth

</div>