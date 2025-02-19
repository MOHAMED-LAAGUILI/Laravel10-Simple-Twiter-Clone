<!-- Search Bar -->
<form class="mb-6 flex items-center gap-2" action="{{ route('dashboard') }}" method="get">
    <input 
        name="search" 
        type="text" 
        class="w-full p-3 border border-gray-700 bg-gray-800 text-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" 
        placeholder="Search Twitter..."
    >
    <button type="submit" class="p-3 bg-blue-700 text-white rounded-lg hover:bg-blue-800 transition-all">
        <i class="fas fa-search"></i>

    </button>
</form>
