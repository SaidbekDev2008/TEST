<script>
    function toggleMenu() {
        document.getElementById('mobile-menu').classList.toggle('hidden');
    }
</script>
<nav class="bg-blue-700 text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">
            <div class="flex-shrink-0 text-2xl font-bold">
                <a href="dashboard.html">TestPlatform</a>
            </div>
            <!-- Desktop Menu -->
            <div class="hidden md:flex space-x-6 items-center">
                <a href="" class="hover:text-gray-300">Teachers</a>
                <a href="{{ route('login') }}" class="hover:text-gray-300">login</a>
                <a href="{{ route('register') }}" class="hover:text-gray-300">Register</a>
                @auth
                    <!-- student/teacher  -->
                    <a class="hover:text-gray-300">{{ auth()->user()->name }}</a>
                    <a href="messages.html" class="hover:text-gray-300">Messages</a>
                    <a href="{{ route('profile') }}" class="hover:text-gray-300">Profile</a>
                    <form action="{{ route('logout') }}" method="post"
                        class="bg-red-500 hover:bg-red-600 px-3 py-1 rounded">
                        @csrf
                        <button type="submit" class="bg-red-500 hover:bg-red-600 px-3 py-1 rounded">Logout</button>
                    </form>
                @endauth

            </div>
            <!-- Mobile Hamburger -->
            <div class="md:hidden">
                <button onclick="toggleMenu()" class="focus:outline-none">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="md:hidden hidden px-4 pb-4 space-y-2">
        <a href="" class="hover:text-gray-300">Teachers</a>
        <a href="" class="hover:text-gray-300">Teachers</a>
        <a href="{{ route('login') }}" class="hover:text-gray-300">login</a>
        <a href="{{ route('register') }}" class="hover:text-gray-300">Register</a>
        @auth
            <!-- student/teacher  -->
            <a class="hover:text-gray-300">{{ auth()->user()->name }}</a>
            <a href="messages.html" class="hover:text-gray-300">Messages</a>
            <a href="{{ route('profile') }}" class="hover:text-gray-300">Profile</a>
            <form action="{{ route('logout') }}" method="post" class="bg-red-500 hover:bg-red-600 px-3 py-1 rounded">
                @csrf
                <button type="submit" class="bg-red-500 hover:bg-red-600 px-3 py-1 rounded">Logout</button>
            </form>
        @endauth
    </div>
</nav>
