@extends('main.main')
@section('document-title')
    Home
@endsection
@section('body-section')
    <section class="hero-section bg-gray-800 min-h-full mt-16 text-white p-5">
        <div class="w-full mx-auto grid lg:grid-cols-2 md:grid-cols-2 sm:grid-cols-1 p-12 content-center items-center">
            <div>
                <p class="my-3 text-6xl">
                    Welcome to
                </p>
                <p class="my-3 text-7xl subpixel-antialiased font-bold text-blue-500">
                    BD Examiner.
                </p>
                <p class="text-xl subpixel-antialiased my-3">
                    The best platform to prepare for exam.
                </p>
                <button onclick="window.location.href='{{ route('signup') }}'"
                    class="my-5 px-10 py-3 bg-blue-700 rounded-md hover:bg-blue-600 active:bg-blue-500">
                    Get Started
                </button>
            </div>
            <div>
                <img src="{{ url('/') }}/images/hero-img.png" alt="hero_image" class="mx-auto md:h-96"
                    style="filter: saturate(60%);">
            </div>
        </div>
    </section>

    <section class="details p-5 bg-gray-900 ">
        <div class="grid py-5 lg:grid-cols-3 md:grid-cols-1 sm:grid-cols-1 mx-auto content-center items-center">
            <div class="text-xl my-3 mx-auto bg-gray-600 text-white text-center rounded-lg p-5 w-2/3">
                <img src="{{ url('/') }}/images/students.png" alt="" class="mx-auto mb-3 h-20 w-auto">
                200+ <br />Students
            </div>
            <div class="text-xl my-3 mx-auto bg-gray-600 text-white text-center rounded-lg p-5 w-2/3">
                <img src="{{ url('/') }}/images/instructor.png" alt="" class="mx-auto mb-3 h-20 w-auto">
                10+ <br />Instructor
            </div>
            <div class="text-xl my-3 mx-auto bg-gray-600 text-white text-center rounded-lg p-5 w-2/3">
                <img src="{{ url('/') }}/images/courses.png" alt="" class="mx-auto mb-3 h-20 w-auto">
                50+ <br />Courses
            </div>
        </div>
    </section>

    <section class="services p-5 bg-gray-800">
        <div class="grid py-5  lg:grid-cols-2 md:grid-cols-2 sm:grid-cols-1 mx-auto content-center items-center">
            <div class="p-3 my-5">
                <img src="{{ url('/') }}/images/services.jpg" alt="Service" class="mx-auto">
            </div>
            <div class="p-3 my-5 text-white">
                <p class="text-4xl text-red-500">
                    Best of us
                </p>
                <p class="flex flex-row text-xl my-5">
                    <img src="{{ url('/') }}/images/check-mark.png" alt="" class="mr-1 h-[26px]">
                    We provide the best questions from the deepth of your lesson .
                </p>
                <p class="flex flex-row text-xl my-5">
                    <img src="{{ url('/') }}/images/check-mark.png" alt="" class="mr-1 h-[26px]">
                    Students can give exam and see their ranklist so that they aware of their merit position .
                </p>
                <p class="flex flex-row text-xl my-5">
                    <img src="{{ url('/') }}/images/check-mark.png" alt="" class="mr-1 h-[26px]">
                    Students can see the questions and answers after attending the class so that they can practice this
                    further .
                </p>
                <p class="flex flex-row text-xl my-5">
                    <img src="{{ url('/') }}/images/check-mark.png" alt="" class="mr-1 h-[26px]">
                    There will be a own students result progress graph .
                </p>
                <p class="flex flex-row text-xl my-5">
                    <img src="{{ url('/') }}/images/check-mark.png" alt="" class="mr-1 h-[26px]">
                    The graph will show the students all mark and ups and down of the mark .
                </p>
            </div>
        </div>
    </section>

    <section class="bg-gray-900 px-5 pt-10 pb-10">
        <div class="text-4xl text-center my-10 text-purple-500">
            Our Best Examiners
        </div>
        <div class="grid grid-cols-3">

            <x-teacher-card width="w-2/3" imageurl="{{url('/')}}/images/rubina.jpg" background="bg-gray-800" textcolor="text-white" name="Sheikh Rubina" subject="(Computer Scienece And Engineering)" about="For 60 years, WWF has worked to help people and nature thrive. As the world's leading conservationorganization, WWF works in nearly 100 countries." whatsapp="" facebook="" email="" />
            <x-teacher-card width="w-2/3" imageurl="{{url('/')}}/images/juansingun.jpg" background="bg-gray-800" textcolor="text-white" name="Juan Sing Un" subject="(Computer Scienece And Engineering)" about="For 60 years, WWF has worked to help people and nature thrive. As the world's leading conservationorganization, WWF works in nearly 100 countries." whatsapp="" facebook="" email="" />
            <x-teacher-card width="w-2/3" imageurl="{{url('/')}}/images/irtiza.jpg" background="bg-gray-800" textcolor="text-white" name="Irtiza Islam" subject="(Computer Scienece And Engineering)" about="For 60 years, WWF has worked to help people and nature thrive. As the world's leading conservationorganization, WWF works in nearly 100 countries." whatsapp="" facebook="" email="" />

        </div>
    </section>
@endsection
