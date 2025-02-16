<nav class="bg-white shadow-md dark:bg-gray-900 px-6 py-4 flex justify-between items-center">
  <!-- Logo -->
  <a href="{{ url('/') }}" class="text-xl font-bold text-blue-600 dark:text-white flex items-center">
      <img src="{{ asset('https://tse4.mm.bing.net/th?id=OIP.t1fyvKgDnUoIiC049MG48AHaHa&pid=Api&P=0&h=180') }}" alt="Logo" class="h-8 mr-2">
      {{ config('app.name')}}
  </a>

  <!-- Authentication Links -->
  <div class="space-x-4">
      @guest
          <a href="" class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">Login</a>
          <a href="" class="px-4 py-2 bg-green-600 text-white rounded-lg hover:bg-green-700">Register</a>
      @else
          <form action="" method="POST" class="inline">
              @csrf
              <button type="submit" class="px-4 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700">Logout</button>
          </form>
      @endguest
  </div>
</nav>
