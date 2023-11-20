<section class="hero-section bg-gray-800 min-h-full mt-16 text-white p-5">
    <div class="container mx-auto">
        <div class="w-full grid lg:grid-cols-2 md:grid-cols-2 sm:grid-cols-1 items-center p-12">
            <div>
                <p class="my-3 text-6xl" data-aos="fade-right">
                    Welcome to
                </p>
                <p class="my-3 text-7xl subpixel-antialiased font-bold text-blue-500" data-aos="slide-up">
                    BD Examiner.
                </p>
                <p class="text-xl subpixel-antialiased my-3" data-aos="fade-left">
                    The best platform to prepare for exam.
                </p>
                <button onclick="window.location.href='{{ route('signup') }}'"
                    class="my-5 px-10 py-3 bg-blue-700 rounded-md hover:bg-blue-600 active:bg-blue-500"
                    data-aos="slide-down">
                    Get Started
                </button>
            </div>
            <div data-aos="fade-down">
                <img src="{{ $imageUrl }}/hero-img.png" alt="hero_image" class="md:h-96" style="filter: saturate(60%);">
            </div>
        </div>
    </div>
</section>
