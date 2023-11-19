<nav class="bg-gray-900 p-3 fixed top-0 w-full flex justify-between font-sans border-b-1 border-white z-10">
    <div class="flex justiify-start">
        <img src="{{ url('/') }}/images/logo.jpeg" class="w-auto h-10">
        <span class="text-white justify-start px-5 py-1 text-2xl cursor-pointer">
            BD Examiner
        </span>
    </div>
    <ul class="flex flex-row justify-center">
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
    <div class="flex flex-row jusitify-end">
        <button onclick="window.location.href='{{route('login')}}'"
            class="bg-pink-700 rounded-md shadow-md text-white px-10 mx-2 hover:bg-pink-900 active:bg-yellow-600">
            Login
        </button>
        <button onclick="window.location.href='{{route('signup')}}'"
            class="bg-gradient-to-r rounded-md shadow-md text-white px-10 mx-2 from-pink-500 to-yellow-600 hover:from-pink-600 hover:to-yellow-900 active:from-yellow-700 active:to-yellow-500">
            Signup
        </button>
    </div>
</nav>
