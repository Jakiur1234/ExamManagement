<footer class="bg-gray-900 px-10 py-10 text-white">
    <div class="grid lg:grid-cols-4 md:grid-cols-4 sm:grid-cols-2 lg:px-24 py-32 border-b-[1px] border-gray-500">
        <div class="flex flex-col justify-between mx-auto">
            <div>
                <img src="{{$imageUrl}}/logo.jpeg" class="h-32 mx-auto">
            </div>
            <div class="py-3">
                <p class="text-2xl text-purple-400 mb-3">
                    BD Examiner
                </p>
                <small class="text-lg text-justify">
                    The best platform for crack the exam. Star Your Journey wiith us. Please join
                    our online based exam platform.
                </small>
            </div>
        </div>
        <div class="flex flex-col">
            <p class="font-bold text-2xl mx-auto">
                Links
            </p>
            <p class="text-md mx-auto py-3">
                <a href="{{ route('home') }}" class="hover:text-blue-500">Home</a>
            </p>
            <p class="text-md mx-auto py-3">
                <a href="{{ route('about') }}" class="hover:text-blue-500">About</a>
            </p>
            <p class="text-md mx-auto py-3">
                <a href="{{ route('courses') }}" class="hover:text-blue-500">Courses</a>
            </p>
            <p class="text-md mx-auto py-3">
                <a href="{{ route('contact') }}" class="hover:text-blue-500">Contact</a>
            </p>
        </div>
        <div class="flex flex-col">
            <p class="font-bold text-2xl mx-auto">
                Solution
            </p>
            <p class="text-md mx-auto py-3">
                <a href="{{ route('home') }}" class="hover:text-blue-500">Home</a>
            </p>
            <p class="text-md mx-auto py-3">
                <a href="{{ route('about') }}" class="hover:text-blue-500">About</a>
            </p>
            <p class="text-md mx-auto py-3">
                <a href="{{ route('courses') }}" class="hover:text-blue-500">Courses</a>
            </p>
            <p class="text-md mx-auto py-3">
                <a href="{{ route('contact') }}" class="hover:text-blue-500">Contact</a>
            </p>
        </div>
        <div class="flex flex-col">
            <p class="font-bold text-2xl mx-auto">
                Important
            </p>
            <p class="text-md mx-auto py-3">
                <a href="{{ route('home') }}" class="hover:text-blue-500">Home</a>
            </p>
            <p class="text-md mx-auto py-3">
                <a href="{{ route('about') }}" class="hover:text-blue-500">About</a>
            </p>
            <p class="text-md mx-auto py-3">
                <a href="{{ route('courses') }}" class="hover:text-blue-500">Courses</a>
            </p>
            <p class="text-md mx-auto py-3">
                <a href="{{ route('contact') }}" class="hover:text-blue-500">Contact</a>
            </p>
        </div>
    </div>
    <div class="text-center text-sm py-3">
        All rights reserved &copy;{{ date('Y') }}. Developed By <a href="https://github.com/Jakiur1234">AJDM Jakiur
            Rahman.</a>
    </div>
</footer>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
</script>
@yield('script')
</body>

</html>
