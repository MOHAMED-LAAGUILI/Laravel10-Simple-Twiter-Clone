<!-- Create Tweet -->
<form class="bg-gray-800 p-6 rounded-lg shadow-md mb-6" method="post" action='{{ route("tweet.create") }}'>
    @csrf
    <textarea 
        name="content" 
        class="w-full p-4 border border-gray-600 bg-gray-700 text-gray-200 rounded-lg focus:ring focus:ring-blue-200" 
        placeholder="What's happening?" 
        rows="3"
    ></textarea>
    <button class="mt-4 w-full bg-blue-500 text-white font-bold py-2 rounded-lg hover:bg-blue-600">Tweet</button>
</form>
