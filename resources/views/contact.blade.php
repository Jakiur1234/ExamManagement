{{-- Extends main file that has all necessary files
    for desing and header footer also --}}
@extends('layout.app')
{{-- Giving document title --}}
@section('document-title')
    Contact
@endsection
@section('body-section')
    <section class="mt-16 bg-gray-700">
        <div class="container mx-auto">
            <form action="" method="post">
                <div
                    class="grid items-center grid-cols-1 p-3 mx-auto w-full gap-5 sm:w-8/12 md:grid-cols-1 lg:grid-cols-2 md:gap-8">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3656.2012040166505!2d89.85223717566491!3d23.597115978775243!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39fe2535f9df3a73%3A0x820055c30208a76c!2sFaridpur%20Engineering%20College!5e0!3m2!1sen!2sbd!4v1700612218792!5m2!1sen!2sbd"
                        style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade" class="w-full aspect-video"></iframe>

                    <div class="form p-5 rounded-md bg-gray-800">
                        <div class="text-white text-3xl text-center underline">
                            Contact Us
                        </div>
                        {{-- Create name field --}}
                        <div class="text-white text-lg">
                            <label for="name">Name : </label>
                        </div>
                        <div class="w-full">
                            <input type="text" name="name" placeholder="Enter Your Name"
                                class="w-full py-1 px-3 rounded-sm mt-2 ring-2 ring-purple-400 placeholder:text-purple-500 text-gray-700">
                        </div>
                        {{-- Create email field --}}
                        <div class="text-white text-lg mt-5">
                            <label for="name">Email : </label>
                        </div>
                        <div class="w-full">
                            <input type="email" name="email" placeholder="Enter Your Email"
                                class="w-full py-1 px-3 rounded-sm mt-2 ring-2 ring-purple-400 placeholder:text-purple-500">
                        </div>
                        {{-- Create number field --}}
                        <div class="text-white text-lg mt-5">
                            <label for="name">Number : </label>
                        </div>
                        <div class="w-full">
                            <input type="number" name="number" placeholder="Enter Your mobile number"
                                class="w-full py-1 px-3 rounded-sm mt-2 ring-2 ring-purple-400 placeholder:text-purple-500">
                        </div>
                        {{-- Create message field --}}
                        <div class="text-white text-lg mt-5">
                            <label for="name">Message : </label>
                        </div>
                        <div class="w-full">
                            <textarea name="message" rows="10"
                                class="w-full py-1 px-3 rounded-sm mt-2 ring-2 ring-purple-400 placeholder:text-purple-500"
                                placeholder="Enter Your Message Here"></textarea>
                        </div>
                        {{-- Create submit buttom
                            n --}}
                        <div class="justify-self-center mt-10">
                            <button
                                class="text-white bg-purple-600 px-10 py-3 rounded-md hover:bg-purple-800 active:bg-purple-300">
                                Submit
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
@endsection
