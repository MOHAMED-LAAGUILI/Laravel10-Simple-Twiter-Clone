<div
    class="bg-white p-6 rounded-lg shadow-lg max-w-full mb-4 transition-all ease-in-out duration-300 hover:shadow-xl relative">


    <!-- Profile Picture and User Info -->
    <div class="flex items-center space-x-4">
        <img src="https://randomuser.me/api/portraits/men/50.jpg" class="w-14 h-14 rounded-full border-2 border-gray-300"
            alt="User">

        <div>
            <h4 class="font-bold text-gray-900 truncate">User Name</h4>
            <span class="text-gray-500 text-sm">@username · {{ $tweet->created_at->diffForHumans() }}</span>
        </div>
    </div>

    <!-- X Button (Delete) positioned at the top right -->
    <form action="{{ route('tweet.destroy', $tweet->id) }}" method="POST" class="absolute top-0 right-2 p-2">
        @csrf
        @method('delete')
        <button type="submit" class="text-gray-500 hover:text-red-500 transition duration-200 text-xl">
            <i class="fas fa-trash"></i>
        </button>
    </form>

    <p class="text-gray-800 mt-4 text-lg break-words whitespace-pre-wrap overflow-hidden max-h-40 overflow-auto">

        @if ($editing  ?? false)
        <form class="bg-white p-6 rounded-lg shadow mb-6" method="post" action='{{ route('tweet.update', $tweet->id) }}'>
            @csrf
            @method('PUT')
            <textarea name="content" class="w-full p-4 border border-gray-300 rounded-lg focus:ring focus:ring-blue-200"
                    placeholder="What's happening?" rows="3">
        {{ $tweet->content }}   
    </textarea>
                <button
                    class="mt-4 w-full bg-blue-500 text-white font-bold py-2 rounded-lg hover:bg-blue-600">update</button>
            </form>
        @else
            {{ $tweet->content }}
        @endif
    </p>

    <!-- Tweet Actions -->
    <div class="flex justify-between items-center text-gray-500 text-sm mt-4">
        <button class="hover:text-blue-500 transition duration-200"><i class="far fa-comment"></i> Comment</button>
        <button class="hover:text-red-500 transition duration-200"><i class="far fa-heart"></i> {{ $tweet->likes }}
            Likes</button>
        <a href="{{ route('tweet.edit', $tweet->id) }}"> <i class="fas fa-pencil"></i>
            <a href="{{ route('tweet.show', $tweet->id) }}"> <i class="fas fa-eye"></i>

            </a>
    </div>


</div>
