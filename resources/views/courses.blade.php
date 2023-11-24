{{-- Extends main file that has all necessary files
    for desing and header footer also --}}
@extends('layout.app')
{{-- giving document title --}}
@section('document-title')
    Courses
@endsection
@section('body-section')
    <section class="bg-gray-700 p-5 mt-16">
        <div class="container mx-auto">
            <div
                class="grid justify-items-center grid-cols-1 gap-3 xl:gap-2 lg:gap-10 md:gap-2 xl:grid-cols-4 lg:grid-cols-2 md:grid-cols-2 sm:grid-cols-1">
                {{-- Get data from database --}}
                @foreach ($courses as $course)
                    {{-- Using component for better design and reuse --}}
                    <x-course-card imageurl="{{ $course['course_cover'] }}" title="{{ $course['course_title'] }}"
                        description="{{ $course['course_description'] }}" instructor="{{ $course['course_instructor'] }}"
                        subject="{{ $course['subject'] }}" totalexam="{{ $course['total_exams'] }}"
                        price="{{ $course['price'] }}" class="{{ $course['class'] }}" currency="{{ $course['currency'] }}" />
                @endforeach
            </div>
            <div class="paginate mt-5 flex justify-center">
                {{ $courses->links() }}
            </div>
        </div>
    </section>
@endsection
