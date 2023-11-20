@extends('main.main')
@section('document-title')
    Home
@endsection
@section('body-section')
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
                        class="my-5 px-10 py-3 bg-blue-700 rounded-md hover:bg-blue-600 active:bg-blue-500" data-aos="slide-down">
                        Get Started
                    </button>
                </div>
                <div>
                    <img src="{{ url('/') }}/images/hero-img.png" alt="hero_image" class="md:h-96"
                        style="filter: saturate(60%);">
                </div>
            </div>
        </div>
    </section>

    <section class="details p-5 bg-gray-900 ">
        <div class="container mx-auto">
            <div class="grid p-12 lg:grid-cols-3 md:grid-cols-1 sm:grid-cols-1 items-center justify-items-center">
                <div class="text-xl my-3 bg-gray-600 text-white text-center rounded-lg p-5 w-2/3 lg:justify-self-start md:justify-self-center sm:justify-self-center" data-aos="zoom-in">
                    <img src="{{ url('/') }}/images/students.png" alt="" class="mx-auto mb-3 h-20 w-auto">
                    200+ <br />Students
                </div>
                <div class="text-xl my-3 bg-gray-600 text-white text-center rounded-lg p-5 w-2/3 lg:justify-self-center md:justify-self-center sm:justify-self-center" data-aos="zoom-in">
                    <img src="{{ url('/') }}/images/instructor.png" alt="" class="mx-auto mb-3 h-20 w-auto">
                    10+ <br />Instructor
                </div>
                <div class="text-xl my-3 bg-gray-600 text-white text-center rounded-lg p-5 w-2/3 lg:justify-self-end md:justify-self-center sm:justify-self-center" data-aos="zoom-in">
                    <img src="{{ url('/') }}/images/courses.png" alt="" class="mx-auto mb-3 h-20 w-auto">
                    50+ <br />Courses
                </div>
            </div>
        </div>

    </section>

    <section class="services p-5 bg-gray-800">
        <div class="container mx-auto">
            <div class="grid p-12 lg:grid-cols-2 md:grid-cols-2 sm:grid-cols-1 content-center items-center">
                <div class="p-3 my-5" data-aos="fade-right">
                    <img src="{{ url('/') }}/images/services.jpg" alt="Service" class="mx-auto">
                </div>
                <div class="p-3 my-5 text-white">
                    <p class="text-4xl text-red-500" data-aos="fade-down">
                        Best of us
                    </p>
                    <p class="flex flex-row text-xl my-5" data-aos="slide-left" data-aos-duration="1000">
                        <img src="{{ url('/') }}/images/check-mark.png" alt="" class="mr-1 h-[26px]">
                        We provide the best questions from the deepth of your lesson .
                    </p>
                    <p class="flex flex-row text-xl my-5" data-aos="slide-left" data-aos-duration="1200">
                        <img src="{{ url('/') }}/images/check-mark.png" alt="" class="mr-1 h-[26px]">
                        Students can give exam and see their ranklist so that they aware of their merit position .
                    </p>
                    <p class="flex flex-row text-xl my-5" data-aos="slide-left" data-aos-duration="1400">
                        <img src="{{ url('/') }}/images/check-mark.png" alt="" class="mr-1 h-[26px]">
                        Students can see the questions and answers after attending the class so that they can practice this
                        further .
                    </p>
                    <p class="flex flex-row text-xl my-5" data-aos="slide-left" data-aos-duration="1600">
                        <img src="{{ url('/') }}/images/check-mark.png" alt="" class="mr-1 h-[26px]">
                        There will be a own students result progress graph .
                    </p>
                    <p class="flex flex-row text-xl my-5" data-aos="slide-left" data-aos-duration="1800">
                        <img src="{{ url('/') }}/images/check-mark.png" alt="" class="mr-1 h-[26px]">
                        The graph will show the students all mark and ups and down of the mark .
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-gray-900 px-5 pt-10 pb-10">
        <div class="container mx-auto">
            <div class="text-4xl text-center my-10 text-purple-500" data-aos="fade-up">
                Our Best Examiners
            </div>
            <div class="grid lg:grid-cols-3 md:grid-cols-2 sm:grid-cols-1 gap-1">

                <x-teacher-card width="w-4/5" imageurl="{{ url('/') }}/images/rubina.jpg" background="bg-gray-800"
                    textcolor="text-white" name="Sheikh Rubina" subject="(Computer Scienece And Engineering)"
                    about="“For 60 years, WWF has worked to help people and nature thrive. As the world's leading conservationorganization, WWF works in nearly 100 countries.”"
                    whatsapp="" facebook="" email="" />
                <x-teacher-card width="w-4/5" imageurl="{{ url('/') }}/images/juansingun.jpg"
                    background="bg-gray-800" textcolor="text-white" name="Juan Sing Un"
                    subject="(Computer Scienece And Engineering)"
                    about="“For 60 years, WWF has worked to help people and nature thrive. As the world's leading conservationorganization, WWF works in nearly 100 countries.”"
                    whatsapp="" facebook="" email="" />
                <x-teacher-card width="w-4/5" imageurl="{{ url('/') }}/images/irtiza.jpg" background="bg-gray-800"
                    textcolor="text-white" name="Irtiza Islam" subject="(Computer Scienece And Engineering)"
                    about="“For 60 years, WWF has worked to help people and nature thrive. As the world's leading conservationorganization, WWF works in nearly 100 countries.”"
                    whatsapp="" facebook="" email="" />

            </div>
        </div>
    </section>

    <section class="review bg-gray-700 pb-10 pt-10 px-5">
        <div class="container mx-auto">
            <div class="text-center text-white my-3 p-3 text-4xl" data-aos="slide-right">
                Students Review
            </div>
            <div class="grid lg:grid-cols-3 md:grid-cols-3 sm:grid-cols-1 gap-3 p-12">

                <x-student-card imageurl="{{ url('/') }}/images/RyanaIslam.jpg" alt="Ryana Islam"
                    text="“We are very glad to admit here. With the help of this exam system i have got cgpa 3.97 out of 4.00 .
                        Thanks to team BD Examiner.”"
                    name="Ryana Islam" />
                <x-student-card imageurl="{{ url('/') }}/images/JhonKim.jpg" alt="Jhon Kim"
                    text="“We are very glad to admit here. With the help of this exam system i have got cgpa 3.97 out of 4.00 .
                        Thanks to team BD Examiner.”"
                    name="Jhon Kim" />
                <x-student-card imageurl="{{ url('/') }}/images/AbritaSing.jpg" alt="Abrita Sing"
                    text="“We are very glad to admit here. With the help of this exam system i have got cgpa 3.97 out of 4.00 .
                        Thanks to team BD Examiner.”"
                    name="Abrita Sing" />

            </div>
        </div>
    </section>
@endsection

@section('script')

@endsection
