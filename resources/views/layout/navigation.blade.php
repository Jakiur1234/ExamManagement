{{-- Create a navbar --}}
<nav class="bg-gray-900 p-3 fixed top-0 w-full flex justify-between font-sans border-b-1 border-white z-10 shadow-xl">
    {{-- Branding section --}}
    <div class="flex items-center justify-start">
        <img src="{{ $imageUrl }}/logo.jpeg" class="w-auto h-10">
        <span class="text-white justify-start px-5 py-1 text-2xl cursor-pointer">
            BD Examiner
        </span>
    </div>
    {{-- Menubar for mobile --}}
    <div class="lg:hidden">
        <button id="nav-toggle" class="text-white text-3xl focus:outline-none">
            <span id="icon">&#9776;</span>
        </button>
    </div>
    {{-- All menu for desktop --}}
    <ul class="hidden lg:flex flex-row justify-center">
        @auth
            <li class="cursor-pointer text-white px-5 py-2 hover:text-blue-500">
                <a href="{{ route('dashboard') }}">
                    Dashboard
                </a>
            </li>
            <li class="cursor-pointer text-white px-5 py-2 hover:text-blue-500">
                <a href="{{ route('home') }}">
                    My Courses
                </a>
            </li>
            <li class="cursor-pointer text-white px-5 py-2 hover:text-blue-500">
                <a href="{{ route('home') }}">
                    Buy Courses
                </a>
            </li>
            <li class="cursor-pointer text-white px-5 py-2 hover:text-blue-500">
                <a href="{{ route('home') }}">
                    Past Exam
                </a>
            </li>
            <li class="cursor-pointer text-white px-5 py-2 hover:text-blue-500">
                <a href="{{ route('home') }}">
                    Result Graph
                </a>
            </li>
        @endauth
        @guest
            <li class="cursor-pointer text-white px-5 py-2 hover:text-blue-500">
                <a href="{{ route('home') }}">
                    Home
                </a>
            </li>
            <li class="cursor-pointer text-white px-5 py-2 hover:text-blue-500">
                <a href="{{ route('courses') }}">
                    Courses
                </a>
            </li>
            <li class="cursor-pointer text-white px-5 py-2 hover:text-blue-500">
                <a href="{{ route('about') }}">
                    About
                </a>
            </li>
            <li class="cursor-pointer text-white px-5 py-2 hover:text-blue-500">
                <a href="{{ route('contact') }}">
                    Contact
                </a>
            </li>
        @endguest

    </ul>
    {{-- Desktop right aling button --}}
    <div class="hidden lg:flex flex-row justify-end">
        @guest
            <button onclick="window.location.href='{{ route('login') }}'"
                class="bg-pink-700 rounded-md shadow-md text-white px-10 mx-2 hover:bg-pink-900 active:bg-yellow-600">
                Login
            </button>
            <button onclick="window.location.href='{{ route('signup') }}'"
                class="bg-gradient-to-r rounded-md shadow-md text-white px-10 mx-2 from-pink-500 to-yellow-600 hover:from-pink-600 hover:to-yellow-900 active:from-yellow-700 active:to-yellow-500">
                Signup
            </button>
        @endguest
        @auth
            <button id="menu-button" aria-expanded="true" aria-haspopup="true"
                onclick="window.location.href='{{ route('logout') }}'"
                class="bg-gradient-to-r rounded-md shadow-md text-white px-10 mx-2 from-pink-500 to-yellow-600 hover:from-pink-600 hover:to-yellow-900 active:from-yellow-700 active:to-yellow-500">
                Logout
            </button>
        @endauth
    </div>

    {{-- Navbar design for mobile --}}

    <div id="mobile-menu" class="hidden lg:hidden absolute top-full left-0 w-full bg-gray-900 shadow-lg">
        <ul class="flex flex-col items-center">
            <li class="cursor-pointer text-white px-5 py-2 hover:text-blue-500">
                <a href="{{ route('home') }}">
                    Home
                </a>
            </li>
            <li class="cursor-pointer text-white px-5 py-2 hover:text-blue-500">
                <a href="{{ route('courses') }}">
                    Courses
                </a>
            </li>
            <li class="cursor-pointer text-white px-5 py-2 hover:text-blue-500">
                <a href="{{ route('about') }}">
                    About
                </a>
            </li>
            <li class="cursor-pointer text-white px-5 py-2 hover:text-blue-500">
                <a href="{{ route('contact') }}">
                    Contact
                </a>
            </li>
        </ul>
        <div class="flex flex-col justify-end gap-2 pb-3">
            <button onclick="window.location.href='{{ route('login') }}'"
                class="bg-pink-700 rounded-md shadow-md text-white mx-auto px-10 py-1 hover:bg-pink-900 active:bg-yellow-600">
                Login
            </button>
            <button onclick="window.location.href='{{ route('signup') }}'"
                class="bg-gradient-to-r rounded-md shadow-md text-white mx-auto px-10 py-1 from-pink-500 to-yellow-600 hover:from-pink-600 hover:to-yellow-900 active:from-yellow-700 active:to-yellow-500">
                Signup
            </button>
        </div>
    </div>

</nav>

{{-- Script for toggle the menu on mobile phone --}}
<script>
    const navToggle = document.getElementById('nav-toggle');
    const mobileMenu = document.getElementById('mobile-menu');
    const icon = document.getElementById('icon');

    navToggle.addEventListener('click', function() {
        mobileMenu.classList.toggle('hidden');
        // Toggle the icon between hamburger and cross
        icon.innerHTML = mobileMenu.classList.contains('hidden') ? '&#9776;' : '&#10005;';
    });
</script>
