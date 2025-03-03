<div
    class="bg-gray-800 p-6 rounded-lg shadow-lg max-w-full mb-4 transition-all ease-in-out duration-300 hover:shadow-xl relative">

    <!-- Profile Picture and User Info -->
    <div class="flex items-center space-x-4">
        <img src="https://api.dicebear.com/9.x/adventurer/svg?seed={{$tweet->user->name}}" class="w-14 h-14 rounded-full border-2 border-gray-600"
            alt="User">

        <div>
            <h4 class="font-bold text-gray-200 truncate">
              
                    {{$tweet->user->name}}
            </h4>
            <span class="text-gray-400 text-sm">{{'@'.$tweet->user->name}} · {{ $tweet->created_at->diffForHumans() }}</span>
        </div>
    </div>

    <!-- X Button (Delete) positioned at the top right -->
    @if (Route::currentRouteName() !== 'dashboard')

    <form action="{{ route('tweet.destroy', $tweet->id) }}" method="POST" class="absolute top-0 right-2 p-2">
        @csrf
        @method('delete')
        <button type="submit" class="text-gray-400 hover:text-red-500 transition duration-200 text-xl">
            <i class="fas fa-trash"></i>
        </button>
    </form>
    @endif

    <p class="text-gray-300 mt-4 text-lg break-words whitespace-pre-wrap overflow-hidden max-h-40 overflow-auto">
        @if ($editing ?? false)
            <form class="bg-gray-700 p-6 rounded-lg shadow mb-6" method="post"
                action='{{ route('tweet.update', $tweet->id) }}'>
                @csrf
                @method('PUT')
                <textarea name="content"
                    class="w-full p-4 border border-gray-600 bg-gray-600 text-gray-200 rounded-lg focus:ring focus:ring-blue-200"
                    placeholder="What's happening?" rows="3">{{ $tweet->content }}</textarea>
                <button
                    class="mt-4 w-full bg-blue-500 text-white font-bold py-2 rounded-lg hover:bg-blue-600">Update</button>
            </form>
        @else
            {{ $tweet->content }}
        @endif
    </p>

    <!-- Tweet Actions -->
    <div class="flex justify-between items-center text-gray-400 text-sm mt-4">
      
        @if (Route::currentRouteName() !== 'dashboard')
        <button onclick="toggleModal('comment-modal')" class="hover:text-blue-500 transition duration-200">
            <i class="far fa-comment"></i> Comment
        </button>
        @endif
        
        
        <button class="hover:text-red-500 transition duration-200"><i class="far fa-heart"></i> {{ $tweet->likes }}
            Likes</button>

            @if (Route::currentRouteName() !== 'tweet.edit' && Route::currentRouteName() !== 'dashboard')

        <a href="{{ route('tweet.edit', $tweet->id) }}" class="hover:text-blue-500 transition duration-200"><i
                class="fas fa-pencil"></i></a>
                @endif

                @if (Route::currentRouteName() !== 'tweet.show')

        <a href="{{ route('tweet.show', $tweet->id) }}" class="hover:text-blue-500 transition duration-200"><i
                class="fas fa-eye"></i></a>
                @endif


    </div>

<!-- Comments Section -->
<div class="mt-4 border-t border-gray-600 pt-4">
    <h5 class="text-gray-400 text-sm mb-3 font-semibold">Comments</h5>
    
    @foreach ($tweet->comments as $comment)
    <div class="flex items-start space-x-3 p-3 bg-gray-800 rounded-lg shadow-md hover:bg-gray-700 transition">
        <!-- User Avatar -->
        <img src="https://api.dicebear.com/9.x/adventurer/svg?seed={{ $comment->user->name }}" 
             class="w-12 h-12 rounded-full border-2 border-gray-500" alt="User Avatar">
        
        <!-- Comment Content -->
        <div>
            <div class="text-gray-200 font-medium">{{ $comment->user->name }}</div>
            <div class="text-gray-400 text-xs">{{ $comment->created_at->diffForHumans() }}</div>
            <p class="text-gray-300 text-sm mt-1">{{ $comment->content }}</p>
        </div>
    </div>
    @endforeach
</div>



</div>


<!-- Modal -->
<div id="comment-modal" class="fixed inset-0 bg-gray-900 bg-opacity-50 hidden flex justify-center items-center z-30">
    <form class="bg-gray-800 p-6 rounded-lg shadow-lg w-11/12 max-w-md"
        action="{{ route('tweet.comments.store', $tweet->id) }}" method="POST">
        @csrf
        <h2 class="text-lg font-bold text-gray-200 mb-4">Leave a Comment</h2>
        <textarea name="content" class="w-full p-4 border border-gray-600 bg-gray-600 text-gray-200 rounded-lg"
            placeholder="Type your comment..." rows="3"></textarea>
        <div class="flex justify-end mt-4">
            <button onclick="toggleModal('comment-modal')"
                class="bg-gray-500 text-white font-bold py-2 px-4 rounded-lg hover:bg-gray-600">Cancel</button>
            <button type="submit"
                class="ml-2 bg-blue-500 text-white font-bold py-2 px-4 rounded-lg hover:bg-blue-600">Submit</button>
        </div>
        </form>
</div>


<script>
    function toggleModal(modalId) {
        const modal = document.getElementById(modalId);
        modal.classList.toggle('hidden');
    }
</script>
