{{-- Extends main file that has all necessary files
    for desing and header footer also --}}
@extends('main.main')
{{-- Giving document title --}}
@section('document-title')
    Contact
@endsection
@section('body-section')
    <section class="mt-16 bg-gray-700">
        <div class="container mx-auto">
            <form action="" method="post">
                <div class="grid p-3 lg:w-1/2 md:w-8/12 sm:w-8/12  mx-auto py-24">
                    <div class="text-white text-3xl text-center underline">
                        Contact Us
                    </div>
                    {{-- Create name field --}}
                    <div class="text-white text-lg">
                        <label for="name">Name : </label>
                    </div>
                    <div class="w-full">
                        <input type="text" name="name" placeholder="Enter Your Name" class="w-full py-1 px-3 rounded-sm mt-2 ring-2 ring-purple-400 placeholder:text-purple-500 text-gray-700">
                    </div>
                    {{-- Create email field --}}
                    <div class="text-white text-lg mt-5">
                        <label for="name">Email : </label>
                    </div>
                    <div class="w-full">
                        <input type="email" name="email" placeholder="Enter Your Email" class="w-full py-1 px-3 rounded-sm mt-2 ring-2 ring-purple-400 placeholder:text-purple-500">
                    </div>
                    {{-- Create number field --}}
                    <div class="text-white text-lg mt-5">
                        <label for="name">Number : </label>
                    </div>
                    <div class="w-full">
                        <input type="number" name="number" placeholder="Enter Your mobile number" class="w-full py-1 px-3 rounded-sm mt-2 ring-2 ring-purple-400 placeholder:text-purple-500">
                    </div>
                    {{-- Create message field --}}
                    <div class="text-white text-lg mt-5">
                        <label for="name">Message : </label>
                    </div>
                    <div class="w-full">
                        <textarea name="message" rows="10" class="w-full py-1 px-3 rounded-sm mt-2 ring-2 ring-purple-400 placeholder:text-purple-500" placeholder="Enter Your Message Here"></textarea>
                    </div>
                    {{-- Create submit buttom
                        n --}}
                    <div class="justify-self-center mt-10">
                        <button class="text-white bg-purple-600 px-10 py-3 rounded-md hover:bg-purple-800 active:bg-purple-300">
                            Submit
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </section>
@endsection
