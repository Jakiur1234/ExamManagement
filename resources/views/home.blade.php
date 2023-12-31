{{-- Extends main file that has all necessary files
    for desing and header footer also --}}
@extends('layout.app')
{{-- giving document title --}}
@section('document-title')
    Home
@endsection
@section('body-section')
    {{-- <!---Hero Section---> --}}
    <section class="hero-section bg-gray-800 min-h-full mt-16 text-white p-5">
        <div class="container mx-auto">
            <div
                class="w-full items-center p-0 xl:p-12 grid grid-cols-1 xl:grid-cols-2 lg:grid-cols-2 md:grid-cols-2 sm:grid-cols-1 ">
                <div>
                    <p class="my-3 text-3xl md:text-6xl" data-aos="fade-up">
                        Welcome to
                    </p>
                    <p class="my-3 text-5xl md:text-7xl subpixel-antialiased font-bold text-blue-500" data-aos="fade-up">
                        BD Examiner.
                    </p>
                    <p class="text-lg md:text-xl subpixel-antialiased my-3" data-aos="fade-down">
                        The best platform to prepare for exam.
                    </p>
                    <button onclick="window.location.href='{{ route('signup') }}'"
                        class="my-5 px-10 py-3 bg-blue-700 rounded-md hover:bg-blue-600 active:bg-blue-500"
                        data-aos="fade-down">
                        Get Started
                    </button>
                </div>
                <div data-aos="fade-down">
                    <img src="{{ $imageUrl }}/hero-img.png" alt="hero_image" class="md:h-96"
                        style="filter: saturate(60%);">
                </div>
            </div>
        </div>
    </section>

    {{-- <!--At a glance section --> --}}
    <section class="at-a-glance p-5 bg-gray-900 ">
        <div class="container mx-auto">
            <div class="grid p-0 md:p-12 lg:grid-cols-3 md:grid-cols-1 sm:grid-cols-1 items-center justify-items-center">
                <div class="text-xl my-3 bg-gray-600 text-white text-center rounded-lg p-3 w-full justify-self-center md:p-5 md:w-2/3 lg:justify-self-start md:justify-self-center sm:justify-self-center"
                    data-aos="zoom-in" data-aos-duration="1000">
                    <img src="{{ $imageUrl }}/students.png" alt="" class="mx-auto mb-3 h-20 w-auto">
                    200+ <br />Students
                </div>
                <div class="text-xl my-3 bg-gray-600 text-white text-center rounded-lg p-3 w-full justify-self-center md:p-5 md:w-2/3 lg:justify-self-start md:justify-self-center sm:justify-self-center"
                    data-aos="zoom-in" data-aos-duration="1200">
                    <img src="{{ $imageUrl }}/instructor.png" alt="" class="mx-auto mb-3 h-20 w-auto">
                    10+ <br />Instructor
                </div>
                <div class="text-xl my-3 bg-gray-600 text-white text-center rounded-lg p-3 w-full justify-self-center md:p-5 md:w-2/3 lg:justify-self-start md:justify-self-center sm:justify-self-center"
                    data-aos="zoom-in" data-aos-duration="1400">
                    <img src="{{ $imageUrl }}/courses.png" alt="" class="mx-auto mb-3 h-20 w-auto">
                    50+ <br />Courses
                </div>
            </div>
        </div>
    </section>

    {{-- <!---Service section --> --}}
    <section class="services p-5 bg-gray-800">
        <div class="container mx-auto">
            <div class="grid content-center items-center grid-cols-1 md:p-12 lg:grid-cols-2 md:grid-cols-2 sm:grid-cols-1">
                <div class="p-3 my-5">
                    <img src="{{ $imageUrl }}/services.jpg" alt="Service" class="mx-auto" data-aos="fade-down">
                </div>
                <div class="p-3 my-5 text-white">
                    <p class="text-4xl text-red-500" data-aos="fade-up">
                        Best of us
                    </p>
                    {{-- Use php config to get the data as an array --}}
                    @php
                        $servicelist = config('serviceslist');
                    @endphp
                    {{-- Using foreach loop and component to short the code and design effectively --}}
                    @foreach ($servicelist as $list)
                        <x-services-list duration="{{ $list['anime_duration'] }}" text="{{ $list['text'] }}"
                            imageurl="{{ $imageUrl }}/check-mark.png" />
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    {{-- <!--Examiners section--> --}}
    <section class="examiners bg-gray-900 px-5 pt-10 pb-10">
        <div class="container mx-auto">
            <div class="text-4xl text-center my-10 text-purple-500" data-aos="fade-down">
                Our Best Examiners
            </div>
            <div class="grid lg:grid-cols-3 md:grid-cols-2 sm:grid-cols-1 gap-y-5">
                {{-- Getting Data From Database and make design effecrtive using components --}}
                @foreach ($instructors as $instructor)
                    <x-teacher-card imageurl="{{ $instructor['image'] }}" name="{{ $instructor['name'] }}"
                        subject="{{ $instructor['subject'] }}" about="{{ $instructor['about'] }}"
                        whatsapp="{{ $instructor['whatsapp'] }}" facebook="{{ $instructor['facebook'] }}"
                        email="{{ $instructor['email'] }}" />
                @endforeach

            </div>
        </div>
    </section>

    <!--Students Review Section -->
    <section class="review bg-gray-700 pb-10 pt-10 px-5">
        <div class="container mx-auto">
            <div class="text-center text-white my-3 p-3 text-4xl" data-aos="fade-up">
                Students Review
            </div>
            <div class="grid grid-cols-1 gap-3 lg:grid-cols-3 md:grid-cols-2 sm:grid-cols-1 md:p-12">
                {{-- Getting reviews data from server and using component for clean code --}}
                @foreach ($reviews as $review)
                    <x-student-card imageurl="{{ $review['image'] }}" text="{{ $review['review'] }}"
                        name="{{ $review['name'] }}" />
                @endforeach
            </div>
        </div>
    </section>
@endsection
