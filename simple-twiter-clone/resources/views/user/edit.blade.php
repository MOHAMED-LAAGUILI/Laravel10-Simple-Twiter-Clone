@extends('layout.layout')

@section('content')
    <div class="flex flex-col md:flex-row min-h-screen">

        <!-- Left Sidebar -->
        <div class="w-full md:w-1/4 p-6 md:sticky md:top-0 md:h-screen">
            @include('shared.SideBar')
        </div>

        <!-- Center Feed -->
        <div class="flex-1 p-6 min-w-[50%]">
            @include('shared.Alert_Message')

            <div class="dark:bg-white bg-gray-900 shadow-lg rounded-2xl p-8 transition-all duration-300 ease-in-out">
                <!-- Edit Profile Header -->
                <div class="flex items-center space-x-5">
                    <div class="relative group">
                        <!-- Profile Image Preview -->
                        <img id="profilePreview"
                             src="{{ auth()->user()->profile_image ?? 'https://api.dicebear.com/9.x/adventurer/svg?seed='.auth()->user()->name }}"
                             alt="User Avatar"
                             class="w-20 h-20 rounded-full border-4 border-gray-500 dark:border-gray-200 shadow-md">

                        <!-- Overlay for Upload -->
                        <label for="profileImage" class="absolute inset-0 bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 flex items-center justify-center text-white text-sm font-semibold cursor-pointer transition-all rounded-full">
                            Change
                        </label>
                    </div>
                    <div>
                        <h2 class="text-2xl font-bold text-gray-50 dark:text-gray-900">Edit Profile</h2>
                        <p class="text-gray-400 dark:text-gray-600">Update your information</p>
                    </div>
                </div>
            
                <!-- Edit Profile Form -->
                <form action="{{route('user.update', $user->id)}}" method="POST" enctype="multipart/form-data" class="mt-6 space-y-4">
                    @csrf
                    @method('PUT')

                    <!-- Hidden Image Input -->
                    <input type="file" id="profileImage" name="profile_image" accept="image/*" class="hidden" onchange="previewImage(event)">

                    <div>
                        <label class="block text-gray-200 dark:text-gray-800">Name</label>
                        <input type="text" name="name" value="{{ old('name', auth()->user()->name) }}" class="w-full mt-1 p-2 rounded bg-gray-800 dark:bg-gray-100 text-white dark:text-gray-900 border border-gray-600 dark:border-gray-300 focus:outline-none focus:ring-2 focus:ring-purple-600">
                        @error('name')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
            
                    <div>
                        <label class="block text-gray-200 dark:text-gray-800">Bio</label>
                        <textarea name="bio" class="w-full mt-1 p-2 rounded bg-gray-800 dark:bg-gray-100 text-white dark:text-gray-900 border border-gray-600 dark:border-gray-300 focus:outline-none focus:ring-2 focus:ring-purple-600">{{ old('bio', auth()->user()->bio) }}</textarea>
                        @error('bio')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
            
                    <div class="text-center">
                        <button type="submit" class="bg-gradient-to-r from-purple-600 to-indigo-600 text-white py-2 px-5 rounded-xl shadow-md hover:opacity-90 transition-all">
                            Save Changes
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <!-- Right Sidebar -->
        <div class="w-full md:w-1/4 p-6 md:sticky md:top-0 md:h-screen">
            @include('shared.Search-Box')
            @include('shared.Follow-Box')
        </div>
    </div>

    <!-- JavaScript for Image Preview -->
    <script>
        function previewImage(event) {
            const reader = new FileReader();
            reader.onload = function () {
                document.getElementById('profilePreview').src = reader.result;
            };
            reader.readAsDataURL(event.target.files[0]);
        }
    </script>
@endsection
