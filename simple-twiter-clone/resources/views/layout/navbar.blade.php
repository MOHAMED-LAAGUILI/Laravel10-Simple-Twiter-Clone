<nav id="navbar" class="fixed top-0 left-0 w-full bg-white shadow-md dark:bg-gray-900 px-6 py-4 flex justify-between items-center transition-all duration-300 z-50">
    <!-- Logo -->
    <a href="{{ url('/') }}" class="text-xl font-semibold text-blue-600 dark:text-white flex items-center space-x-2">
        <img src="{{ asset('https://tse4.mm.bing.net/th?id=OIP.t1fyvKgDnUoIiC049MG48AHaHa&pid=Api&P=0&h=180') }}" alt="Logo" class="h-8 w-8">
        <span class="hidden md:inline">{{ config('app.name') }}</span>
    </a>

    <!-- Hamburger Icon for Mobile -->
    <button id="hamburger" class="md:hidden text-2xl text-gray-700 dark:text-white">
        <i class="fas fa-bars"></i>
    </button>

    <!-- Navigation Links -->
    <div id="nav-links" class="hidden md:flex space-x-6 items-center">
        @guest
            <a href="#" class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-all duration-300">Login</a>
            <a href="#" class="px-4 py-2 bg-green-600 text-white rounded-lg hover:bg-green-700 transition-all duration-300">Register</a>
        @else
            <form action="#" method="POST" class="inline">
                @csrf
                <button type="submit" class="px-4 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700 transition-all duration-300">Logout</button>
            </form>
        @endguest
    </div>
</nav>

<!-- Mobile Menu -->
<div id="mobile-menu" class="md:hidden fixed inset-0 bg-black bg-opacity-50 flex justify-center items-center z-40 hidden">
    <div class="bg-white dark:bg-gray-900 p-6 rounded-lg space-y-6 w-4/5">
        @guest
            <a href="#" class="block text-lg text-blue-600 hover:text-blue-700">Login</a>
            <a href="#" class="block text-lg text-green-600 hover:text-green-700">Register</a>
        @else
            <form action="#" method="POST" class="inline">
                @csrf
                <button type="submit" class="block text-lg text-red-600 hover:text-red-700">Logout</button>
            </form>
        @endguest
    </div>
</div>

<script>
    // Handle mobile menu toggle
    const hamburger = document.getElementById("hamburger");
    const mobileMenu = document.getElementById("mobile-menu");
    const navLinks = document.getElementById("nav-links");

    hamburger.addEventListener("click", () => {
        mobileMenu.classList.toggle("hidden");
        navLinks.classList.add("hidden");
    });

    window.addEventListener("scroll", function() {
        let navbar = document.getElementById("navbar");
        if (window.scrollY > 50) {
            navbar.classList.add("backdrop-blur-md", "bg-white/80", "dark:bg-gray-900/80");
        } else {
            navbar.classList.remove("backdrop-blur-md", "bg-white/80", "dark:bg-gray-900/80");
        }
    });
</script>
